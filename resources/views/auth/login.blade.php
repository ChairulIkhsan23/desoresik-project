@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="max-w-sm mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <!-- Logo dan Nama Aplikasi -->
    <div class="flex items-center justify-center mb-4">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12">
        <div class="h-10 border-l-2 border-gray-400 mx-0.5"></div>
        <h2 class="text-3xl font-bold text-emerald-700 ml-1">DesoResik</h2>
    </div>

    <h2 class="text-xl font-bold text-gray-800 text-center mb-6 relative">
    Login
    </h2>

    @if ($errors->any())
        <div class="text-red-500 mb-4">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.proses') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full border rounded-lg p-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" class="w-full border rounded-lg p-2" required>
        </div>

        <button type="submit" class="w-full bg-emerald-600 text-white p-2 rounded-lg hover:bg-emerald-700">
            Login
        </button>

        <div class="mt-4 text-center">
            <p>Belum punya akun? 
                <a href="{{ route('registrasi.tampil') }}" class="text-emerald-700 font-bold hover:underline">Daftar</a>
            </p>
        </div>
    </form>
</div>

<!-- Footer -->
<div class="text-center text-gray-500 text-sm mt-6 mb-10">
    &copy; {{ date('Y') }} Desoresik. All Rights Reserved.
</div>
@endsection
