<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users = User::all();
        $users = User::paginate(5);
        //$users = User::simplePaginate(10);
        //dd($users->toArray()); //Dump & Die
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'document'  => ['required', 'numeric', 'unique:'.User::class],
            'fullname'  => ['required', 'string'],
            'gender'    => ['required'],
            'birthdate' => ['required', 'date'],
            'photo'     => ['required', 'image'],
            'phone'     => ['required'],
            'email'     => ['required', 'lowercase', 'email', 'unique:'.User::class],
            'password'  => ['required', 'confirmed']
        ]);

        if($validated) {
            //dd($request->all());
            if($request->hasFile('photo')) {
                $photo = time().'.'.$request->photo->extension();
                $request->photo->move(public_path('images'), $photo);
            }

            $user = new User;
            $user->document  = $request->document;
            $user->fullname  = $request->fullname;
            $user->gender    = $request->gender;
            $user->birthdate = $request->birthdate;
            $user->photo     = $photo;
            $user->phone     = $request->phone;
            $user->email     = $request->email;
            $user->password  = bcrypt($request->password);

            if($user->save()) {
                return redirect('users')->with('message', 'The user: '.$user->fullname.' was successfully added!');
            }

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //dd($user->toArray());
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
       return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $validated = $request->validate([
            'document'  => ['required', 'numeric', 'unique:'.User::class.',document,'.$request->id],
            'fullname'  => ['required', 'string'],
            'gender'    => ['required'],
            'birthdate' => ['required', 'date'],
            'phone'     => ['required'],
            'email'     => ['required', 'lowercase', 'email', 'unique:'.User::class.',email,'.$request->id],
        ]);

        if($validated) {
            //dd($request->all());
            if($request->hasFile('photo')) {
                $photo = time().'.'.$request->photo->extension();
                $request->photo->move(public_path('images'), $photo);
                if($request->originphoto != 'no-photo.png') {
                    unlink(public_path('images/').$request->originphoto);
                }
            } else {
                $photo = $request->originphoto;
            }

            $user->document  = $request->document;
            $user->fullname  = $request->fullname;
            $user->gender    = $request->gender;
            $user->birthdate = $request->birthdate;
            $user->photo     = $photo;
            $user->phone     = $request->phone;
            $user->email     = $request->email;

            if($user->save()) {
                return redirect('users')->with('message', 'The user: '.$user->fullname.' was successfully edited!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        
        // if($user->delete()) {
        //     if($user->photo != 'no-photo.png') {
        //         unlink(public_path('images/').$user->photo);
        //     }
        //     return redirect('users')->with('message', 'The user: '.$user->fullname.' was successfully deleted!');
        // }
        // return redirect('users')->with('message', 'The user: '.$user->fullname.' was successfully deleted!');
    }

    public function search(Request $request) {
        $users = User::names($request->q)->paginate(10);
        return view('users.search')->with('users', $users);
    }
}