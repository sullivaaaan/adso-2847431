@extends('layouts.app')
@section('title, 'dashboard')
@section('content')
<!-- Authentication -->
<h1 class="text-6xl text-white mb-10">Welcome: Customer</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     this.closest('form').submit();">
        Log Out
    </a>
</form>