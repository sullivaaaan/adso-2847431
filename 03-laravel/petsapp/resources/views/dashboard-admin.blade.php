@extends('layouts.app')
@section('title, 'dashboard')
@section('content')
@include('layouts.navbar')
<!-- Authentication -->
<h1 class="text-3xl text-white font-bold mb-10 pb-2 border-b-2">Welcome: Administrator</h1>
<div class="stats shadow">
  <div class="stat">
    <div class="stat-figure stats-vertical lg:stats-horizontal text-secondary">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        class="inline-block h-8 w-8 stroke-current"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
        ></path>
      </svg>
    </div>
    <div class="stat-module">module</div>
    <div class="stat-user">users</div>
    <div class="stat w-[280px]">
    {{App\models\user::count()}}records</div>
    <a href="{{url('users')}}" class="btn bg-cyan-800 text-white rounded-full mt-4">more info</a>
  </div>

  <div class="stat">
    <div class="stat-figure text-secondary">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        class="inline-block h-8 w-8 stroke-current"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
        ></path>
      </svg>
    </div>
    <div class="stat-title">module</div>
    <div class="stat-value">pets</div>
    <div class="stat-desc">20 records</div>
        <div class="stat w-[280px]">
    {{App\models\pet::count()}}records</div>
    <a href="{{url('pets')}}" class="btn bg-cyan-800 text-white rounded-full mt-4">more info</a>
  </div>
  </div>

  <div class="stat">
    <div class="stat-figure text-secondary">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        class="inline-block h-8 w-8 stroke-current"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"
        ></path>
      </svg>
    </div>
    <div class="stat-title">module</div>
    <div class="stat-value">adoptions</div>
    <div class="stat-desc">record</div>
        <div class="stat w-[280px]">
    {{App\models\adoption::count()}}records</div>
    <a href="{{url('adoptions')}}" class="btn bg-cyan-800 text-white rounded-full mt-4">more info</a>
  </div>
  </div>
</div>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     this.closest('form').submit();">
        Log Out
    </a>
</form>