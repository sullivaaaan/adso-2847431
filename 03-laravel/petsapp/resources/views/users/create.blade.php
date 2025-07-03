@extends('layouts.app')
@section('title', 'Create User')

@section('content')
@include('layouts.navbar')



<h1 class="text-3xl pt-30 flex gap-2 items-center text-white font-bold mb-10 pb-2 border-b-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
    </svg>
    Create User
</h1>

<div class="breadcrumbs text-sm text-white">
  <ul>
    <li><a href="{{ url('users') }}">User Module</a></li>
    <li><a>Create User</a></li>
  </ul>
</div>

<form method="post" action="{{ route('users.store') }}" class="pt-6 pb-20" enctype="multipart/form-data">
        @csrf
        <fieldset class="fieldset w-sm ml-12 bg-base-200 border border-base-300 pl-6  pr-0 rounded-box mx-auto items-center" >
                
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
                        <img id="preview" src="{{ asset('images/no-photo.png') }}" />
                    </div>
                    <small class="font-bold text-gray-500  felx items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
</svg>
                        Upload photo</small>
                </div>
                <input type="file" name="photo" id="photo" class="hidden" accept="image/*">
                <label class="fieldset-label">Document:</label>
                <input type="number" name="document" class="input flex rounded-full w-full" placeholder="75000001" value="{{ old('document') }}" />

                <label class="fieldset-label">FullName:</label>
                <input type="text" name="fullname" class="input rounded-full w-full" placeholder="John Wick" value="{{ old('fullname') }}"/>

                <label class="fieldset-label">Gender:</label>
                <select name="gender" class="select rounded-full w-full">
                    <option value="">Select Gender...</option>
                    <option value="Female" @if(old('gender')=='Female') selected @endif>Female</option>
                    <option value="Male" @if(old('gender')=='Male') selected @endif>Male</option>
                </select>

                <label class="fieldset-label">BirthDate:</label>
                <input type="date" name="birthdate" class="input rounded-full w-full" value="{{ old('birthdate') }}"/>

                <label class="fieldset-label">Phone:</label>
                <input type="text" name="phone" class="input rounded-full w-full" placeholder="3210000001" value="{{ old('phone') }}"/>

                <label class="fieldset-label">Email:</label>
                <input type="email" name="email" class="input rounded-full w-full" placeholder="jwick@mail.com" value="{{ old('email') }}"/>
                
                <label class="fieldset-label">Password:</label>
                <input type="password" name="password" class="input rounded-full w-full" placeholder="secret" />

                <label class="fieldset-label">Confirm Password:</label>
                <input type="password" name="password_confirmation" class="input rounded-full w-full" placeholder="secret" />
                <div class="flex w-9/10">

                    <button class=" mt-4 p-2  opacity-100 rounded-full text-white bg-cyan-800  hover:bg-red-500 w-full">Create</button>
                    
                </div>
 

        

        </fieldset>
    </form>


@section('js')
<script>
    const upload = document.querySelector('#upload')
    const photo = document.querySelector('#photo')
    const preview = document.querySelector('#preview')

    upload.addEventListener('click', function(e){
        photo.click()
    })
    photo.addEventListener('change', function(e){
        preview.src = window.URL.createObjectURL(this.files[0])
    })
</script>
  
@endsection