<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; // Importar la fachada File

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pet::paginate(5);
        return view('pets.index')->with('pets', $pets);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => ['required', 'string'],
            'imagen'      => ['required', 'image'], 
            'kind'        => ['required', 'string'],
            'weight'      => ['required', 'numeric'],
            'age'         => ['required', 'numeric'],
            'breed'       => ['required', 'string'],
            'location'    => ['required', 'string'],
            'description' => ['nullable', 'string'],
        ]);

        if($validated) {
            $imagen = null; 
            if($request->hasFile('imagen')) { 
                $imagen = time().'.'.$request->imagen->extension(); 
                $request->imagen->move(public_path('images'), $imagen); 
            } else {
                $imagen = 'no-image.png'; 
            }

            $pet = new Pet;
            $pet->name        = $request->name;
            $pet->image      = $imagen; 
            $pet->kind        = $request->kind;
            $pet->weight      = $request->weight;
            $pet->age         = $request->age;
            $pet->breed       = $request->breed;
            $pet->location    = $request->location;
            $pet->description = $request->description;

            if($pet->save()) {
                return redirect('pets')->with('message', 'La mascota: '.$pet->name.' fue añadida correctamente!');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return view('pets.show')->with('pet', $pet);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        return view('pets.edit')->with('pet', $pet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        $validated = $request->validate([
            'name'        => ['required', 'string'],
            // 'imagen' es opcional en la validación de update si no se va a cambiar
            'kind'        => ['required', 'string'],
            'weight'      => ['required', 'numeric'],
            'age'         => ['required', 'numeric'],
            'breed'       => ['required', 'string'],
            'location'    => ['required', 'string'],
            'description' => ['nullable', 'string'],
        ]);

        if($validated) {
            $imagen = $request->originimagen; 
            if($request->hasFile('imagen')) { 
                // Eliminar la imagen original solo si no es la imagen por defecto y si el archivo existe
                if($request->originimagen && $request->originimagen != 'no-image.png' && File::exists(public_path('images/').$request->originimagen)) {
                    File::delete(public_path('images/').$request->originimagen);
                }
                $imagen = time().'.'.$request->imagen->extension(); 
                $request->imagen->move(public_path('images'), $imagen); 
            } else {
                // Si no se sube una nueva imagen, mantener la original
                $imagen = $request->originimagen;
            }

            $pet->name        = $request->name;
            $pet->image      = $imagen; 
            $pet->kind        = $request->kind;
            $pet->weight      = $request->weight;
            $pet->age         = $request->age;
            $pet->breed       = $request->breed;
            $pet->location    = $request->location;
            $pet->description = $request->description;

            if($pet->save()) {
                return redirect('pets')->with('message', 'The pet: '.$pet->name.' It was edited successfully!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        if($pet->delete()) {
            $imagenPath = public_path('images/' . $pet->imagen); 

            // Eliminar la imagen solo si no es la imagen por defecto, si existe el archivo
            // y si no es un directorio.
            if ($pet->imagen && $pet->imagen != 'no-imagen.png' && File::exists($imagenPath) && !File::isDirectory($imagenPath)) {
                File::delete($imagenPath);
            }
            return redirect('pets')->with('message', 'The pet: '.$pet->name.' was successfully deleted!');
        }
        return redirect('pets')->with('message', 'The pet could not be deleted.');
    }

    public function search(Request $request)
    {
        $q = $request->input('q');
        $pets = Pet::where('name', 'LIKE', "%{$q}%")
                    ->orWhere('kind', 'LIKE', "%{$q}%")
                    ->get();
        return view('pets.search')->with('pets', $pets);
    }
}