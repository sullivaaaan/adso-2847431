@extends('layouts.app')
@section('title', 'Mostrar Mascota')

@section('content')
    @include('layouts.navbar')


<h1 class="text-3xl pt-30 flex gap-2 items-center text-white font-bold mb-10 pb-2 border-b-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
    </svg>
    Mostrar Mascota
</h1>

<div class="breadcrumbs text-sm text-white">
  <ul>
    <li><a href="{{ url('pets') }}">Módulo de Mascotas</a></li>
    <li>Mostrar Mascota</li>
  </ul>
</div>

<ul class="list my-8 bg-base-100 rounded-box shadow-md w-4/12">
    <li class="list-row mx-auto">
        <div class="avatar">
            <div class="mask mask-squircle w-48 hover:scale-110 transition-transform">
                <img src="{{ asset('images/' . $pet->image ) }}" alt="imagen" />
            </div>
        </div>
    </li>
  <li class="list-row">
    <div class="flex gap-4 items-center">
      <div class="font-bold w-24">Nombre: </div>
      <div class="text-xs font-semibold opacity-60">
        {{ $pet->name }}
      </div>
    </div>
  </li>
  <li class="list-row">
    <div class="flex gap-4 items-center">
      <div class="font-bold w-24">Tipo: </div>
      <div class="text-xs font-semibold opacity-60">
        {{ $pet->kind}}
      </div>
    </div>
  </li>
  <li class="list-row">
    <div class="flex gap-4 items-center">
      <div class="font-bold w-24">Peso: </div>
      <div class="text-xs font-semibold opacity-60">
        {{ $pet->weight}} kg
      </div>
    </div>
  </li>
  <li class="list-row">
    <div class="flex gap-4 items-center">
      <div class="font-bold w-24">Edad: </div>
      <div class="text-xs font-semibold opacity-60">
        {{ $pet->age}} años
      </div>
    </div>
  </li>
  <li class="list-row">
    <div class="flex gap-4 items-center">
      <div class="font-bold w-24">Raza: </div>
      <div class="text-xs font-semibold opacity-60">
        {{ $pet->breed}}
      </div>
    </div>
  </li>
  <li class="list-row">
    <div class="flex gap-4 items-center">
      <div class="font-bold w-24">Ubicación: </div>
      <div class="text-xs font-semibold opacity-60">
        {{ $pet->location}}
      </div>
    </div>
  </li>
  <li class="list-row">
    <div class="flex gap-4 items-center">
      <div class="font-bold w-24">Descripción: </div>
      <div class="text-xs font-semibold opacity-60">
        {{ $pet->description}}
      </div>
    </div>
  </li>
    {{-- Nuevo campo para el Estado de Adopción --}}
    <li class="list-row">
        <div class="flex gap-4 items-center">
            <div class="font-bold w-24">Estado: </div>
            <div class="text-xs font-semibold">
                @if ($pet->is_adopted) 
                    <span class="badge badge-success">Adoptado</span>
                @else
                    <span class="badge badge-error">No Adoptado</span>
                @endif
            </div>
        </div>
    </li>
</ul>


@endsection