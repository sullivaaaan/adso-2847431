@extends('layouts.app')
@section('title', 'Editar Mascota')

@section('content')
@include('layouts.navbar')


<h1 class="text-3xl pt-30 flex gap-2 items-center text-white font-bold mb-10 pb-2 border-b-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
    </svg>
    Editar Mascota
</h1>

<div class="breadcrumbs text-sm text-white">
  <ul>
    <li><a href="{{ url('pets') }}">Módulo de Mascotas</a></li>
    <li>Editar Mascota</li>
  </ul>
</div>

<form method="post" action="{{ url('pets/'.$pet->id) }}" class="pt-6 pb-20" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $pet->id }}">
        <fieldset class="fieldset w-md bg-base-200 border border-base-300 p-4 rounded-box">
                @if (count($errors->all()) > 0)
                    <div class="flex flex-col gap-1 my-4">
                        @foreach ($errors->all() as $message)
                            <div class="badge badge-error">
                                <svg class="size-[1em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="currentColor"><rect x="1.972" y="11" width="20.056" height="2" transform="translate(-4.971 12) rotate(-45)" fill="currentColor" stroke-width="0"></rect><path d="m12,23c-6.065,0-11-4.935-11-11S5.935,1,12,1s11,4.935,11,11-4.935,11-11,11Zm0-20C7.038,3,3,7.037,3,12s4.038,9,9,9,9-4.037,9-9S16.962,3,12,3Z" stroke-width="0" fill="currentColor"></path></g></svg>
                                {{ $message }}
                            </div>
                        @endforeach
                    </div>
                @endif
                <div class="avatar mx-auto flex flex-col gap-2 items-center">
                    <div id="upload" class="mask mask-squircle w-36 cursor-pointer hover:scale-110 transition-transform">
                        {{-- Se usa el operador de fusión nula para asegurar que siempre haya una imagen --}}
                        <img src="{{ asset('images/' . $pet->image ) }}" alt="imagen" />
                        <input type="hidden" name="originimagen" value="{{ $pet->image }}"> 
                    </div>
                    <small class="font-bold text-gray-500 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Subir Foto
                    </small>
                </div>
                <input type="file" name="imagen" id="imagen" class="hidden" accept="image/*"> 

                <label class="fieldset-label">Nombre:</label>
                <input type="text" name="name" class="input rounded-full w-full" placeholder="Nombre de la mascota" value="{{ old('name', $pet->name) }}" />

                <label class="fieldset-label">Tipo:</label>
                <input type="text" name="kind" class="input rounded-full w-full" placeholder="Ej: Perro, Gato, Pájaro" value="{{ old('kind', $pet->kind) }}" />

                <label class="fieldset-label">Peso (kg):</label>
                <input type="number" name="weight" class="input rounded-full w-full" placeholder="Ej: 5.5" step="0.1" value="{{ old('weight', $pet->weight) }}" />

                <label class="fieldset-label">Edad (años):</label>
                <input type="number" name="age" class="input rounded-full w-full" placeholder="Ej: 3" value="{{ old('age', $pet->age) }}" />

                <label class="fieldset-label">Raza:</label>
                <input type="text" name="breed" class="input rounded-full w-full" placeholder="Ej: Labrador, Siames" value="{{ old('breed', $pet->breed) }}" />

                <label class="fieldset-label">Ubicación:</label>
                <input type="text" name="location" class="input rounded-full w-full" placeholder="Ej: Medellín, Colombia" value="{{ old('location', $pet->location) }}" />

                <label class="fieldset-label">Descripción:</label>
                <textarea name="description" class="textarea rounded-box w-full" placeholder="Descripción de la mascota">{{ old('description', $pet->description) }}</textarea>

                <button class="btn mt-4 p-6 rounded-full text-white bg-purple-800 w-full">Actualizar Mascota</button>
        </fieldset>
    </form>
@endsection

@section('js')
    <script>
        const upload  = document.querySelector('#upload')
        const preview = document.querySelector('#preview')
        const imagen   = document.querySelector('#imagen') 

        upload.addEventListener('click', function(e) {
            imagen.click() // Cambiado de photo.click() a imagen.click()
        })

        imagen.addEventListener('change', function(e) { 
            preview.src = window.URL.createObjectURL(this.files[0])
        })
    </script>
@endsection
