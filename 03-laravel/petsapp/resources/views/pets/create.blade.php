@extends('layouts.app')
@section('title', 'Crear Mascota')

@section('content')
    @include('layouts.navbar')

    <h1 class="text-3xl pt-30 flex gap-2 items-center text-white font-bold mb-10 pb-2 border-b-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-12">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        Crear Mascota
    </h1>
    <div class="breadcrumbs text-sm text-white">
        <ul>
            <li><a href="{{ url('pets') }}">Módulo de Mascotas</a></li>
            <li><a>Crear Mascota</a></li>
        </ul>
    </div>
    <form method="post" action="{{ route('pets.store') }}" class="pt-4 pb-20" enctype="multipart/form-data">
        @csrf
        <fieldset class="fieldset w-md bg-base-200 border border-base-300 p-4 rounded-box">

            @if (count($errors->all()) > 0)
                <div class="flex flex-col gap-1 my-4">
                    @foreach ($errors->all() as $message)
                        <div class="badge badge-error">
                            <svg class="size-[1em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="currentColor">
                                    <rect x="1.972" y="11" width="20.056" height="2"
                                        transform="translate(-4.971 12) rotate(-45)" fill="currentColor" stroke-width="0">
                                    </rect>
                                    <path
                                        d="m12,23c-6.065,0-11-4.935-11-11S5.935,1,12,1s11,4.935,11,11-4.935,11-11,11Zm0-20C7.038,3,3,7.037,3,12s4.038,9,9,9,9-4.037,9-9S16.962,3,12,3Z"
                                        stroke-width="0" fill="currentColor"></path>
                                </g>
                            </svg>
                            {{ $message }}
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="avatar flex flex-col gap-2 items-center  mx-auto">
                <div id="upload"
                    class="mask mask-squircle w-36 cursor-pointer hover:scale-110 hover:border-gray-500 border   transition-transform">
                    <img id="preview" src="{{ asset('images/no-imagen.png') }}" />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                    </svg>
                </div>
                <small class="font-bold text-gray-500 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    Subir foto
                </small>
            </div>
            <input type="file" name="imagen" id="imagen" class="hidden" accept="image/*">

            <label class="fieldset-label">Nombre:</label>
            <input type="text" name="name" class="input rounded-full w-full" placeholder="Nombre de la mascota"
                value="{{ old('name') }}" />

            <label class="fieldset-label">Tipo:</label>
            <input type="text" name="kind" class="input rounded-full w-full" placeholder="Ej: Perro, Gato, Pájaro"
                value="{{ old('kind') }}" />

            <label class="fieldset-label">Peso (kg):</label>
            <input type="number" name="weight" class="input rounded-full w-full" placeholder="Ej: 5.5" step="0.1"
                value="{{ old('weight') }}" />

            <label class="fieldset-label">Edad (años):</label>
            <input type="number" name="age" class="input rounded-full w-full" placeholder="Ej: 3"
                value="{{ old('age') }}" />

            <label class="fieldset-label">Raza:</label>
            <input type="text" name="breed" class="input rounded-full w-full" placeholder="Ej: Labrador, Siames"
                value="{{ old('breed') }}" />

            <label class="fieldset-label">Ubicación:</label>
            <input type="text" name="location" class="input rounded-full w-full" placeholder="Ej: Medellín, Colombia"
                value="{{ old('location') }}" />

            <label class="fieldset-label">Descripción:</label>
            <textarea name="description" class="textarea rounded-box w-full" placeholder="Descripción de la mascota">{{ old('description') }}</textarea>

            <button class="btn mt-4 p-6 rounded-full text-white bg-purple-800 w-full">Registrar Mascota</button>

        </fieldset>
    </form>
@endsection

@section('js')
    <script>
        const upload = document.querySelector('#upload');
        const imagen = document.querySelector('#imagen'); // Cambiado de image a imagen
        const preview = document.querySelector('#preview');

        upload.addEventListener('click', function(e) {
            imagen.click(); // Cambiado de image.click() a imagen.click()
        });

        imagen.addEventListener('change', function(e) { // Cambiado de image.addEventListener a imagen.addEventListener
            preview.src = window.URL.createObjectURL(this.files[0]);
        })
    </script>
@endsection
