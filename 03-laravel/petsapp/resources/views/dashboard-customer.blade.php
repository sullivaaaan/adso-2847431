@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
@include('layouts.navbar')
<!-- Authentication -->
<h1 class="text-6xl text-white mb-10">Welcome: Customer</h1>
<form method="POST" action="{{ route('logout') }}" class="text-white">
    @csrf
    <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     this.closest('form').submit();">
        Log Out
    </a>
</form>
@endsection