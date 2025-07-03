@extends('layouts.app')
@section('title', 'Edit User')

@section('content')
    @include('layouts.navbar')

    <h1 class="text-3xl pt-30 flex gap-2 items-center text-white font-bold mb-10 pb-2 border-b-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-12">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.862 4.487 19.5 7.125M5.25 6H10m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.96 51.96 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201V6M12 3 7.5 7.5M12 3v13.5" />
        </svg>
        Edit User
    </h1>

    <div class="breadcrumbs text-sm text-white">
        <ul>
            <li><a href="{{ url('users') }}">User Module</a></li>
            <li>Edit User</li>
        </ul>
    </div>

    <form method="post" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data" class="pt-4 pb-20">
        @csrf
        @method('PUT')

        <fieldset class="fieldset w-md bg-base-200 border border-base-300 p-4 rounded-box">

            {{-- Validación --}}
            @if ($errors->any())
                <div class="flex flex-col gap-1 my-4">
                    @foreach ($errors->all() as $message)
                        <div class="badge badge-error">{{ $message }}</div>
                    @endforeach
                </div>
            @endif

            {{-- Imagen actual y carga nueva --}}
            <div class="avatar flex flex-col gap-2 items-center  mx-auto">
                <div id="upload"
                    class="mask mask-squircle w-36 cursor-pointer hover:scale-110 hover:border-gray-500 border transition-transform">
                    <img id="preview"
                        src="{{ $user->photo ? asset('images/' . $user->photo) : asset('images/upload.png') }}" />
                </div>
                <small class="font-bold text-gray-500 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M2.25 19.5h19.5" />
                    </svg>
                    Upload New Photo (optional)
                </small>
            </div>

            <input type="file" name="photo" id="photo" class="hidden" accept="image/*">

            {{-- Campos --}}
            <label class="fieldset-label">Document:</label>
            <input type="number" name="document" class="input rounded-full w-full"
                value="{{ old('document', $user->document) }}" />

            <label class="fieldset-label">FullName:</label>
            <input type="text" name="fullname" class="input rounded-full w-full"
                value="{{ old('fullname', $user->fullname) }}" />

            <label class="fieldset-label">Gender:</label>
            <select name="gender" class="select rounded-full w-full">
                <option value="">Select Gender...</option>
                <option value="Female" @if (old('gender', $user->gender) == 'Female') selected @endif>Female</option>
                <option value="Male" @if (old('gender', $user->gender) == 'Male') selected @endif>Male</option>
            </select>

            <label class="fieldset-label">BirthDate:</label>
            <input type="date" name="birthdate" class="input rounded-full w-full"
                value="{{ old('birthdate', $user->birthdate) }}" />

            <label class="fieldset-label">Phone:</label>
            <input type="text" name="phone" class="input rounded-full w-full"
                value="{{ old('phone', $user->phone) }}" />

            <label class="fieldset-label">Email:</label>
            <input type="email" name="email" class="input rounded-full w-full"
                value="{{ old('email', $user->email) }}" />

            <label class="fieldset-label">New Password (optional):</label>
            <input type="password" name="password" class="input rounded-full w-full" placeholder="Enter new password" />

            <label class="fieldset-label">Confirm New Password:</label>
            <input type="password" name="password_confirmation" class="input rounded-full w-full"
                placeholder="Repeat new password" />

            <button class="btn mt-4 p-6 rounded-full text-white bg-indigo-600 w-full">Save Changes</button>
        </fieldset>
    </form>
@endsection

@section('js')
    <script>
        const upload = document.querySelector('#upload');
        const photo = document.querySelector('#photo');
        const preview = document.querySelector('#preview');

        upload.addEventListener('click', () => photo.click());
        photo.addEventListener('change', () => {
            preview.src = URL.createObjectURL(photo.files[0]);
        });
    </script>
@endsection