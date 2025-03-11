@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen pb-16">
    <div class="max-w-sm w-full bg-white p-6 rounded-lg shadow-md">
        <!-- Logo dan Nama Aplikasi -->
        <div class="flex items-center justify-center mb-4">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12">
            <div class="h-10 border-l-2 border-gray-400 mx-2"></div>
            <h2 class="text-3xl font-bold text-emerald-700">DesoResik</h2>
        </div>

        <!-- Judul -->
        <h2 class="text-xl font-bold text-gray-800 text-center mb-6">Login</h2>

        @if ($errors->any())
            <div class="text-red-500 mb-4">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Form Login -->
        <form action="{{ route('login.proses') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Email</label>
                <input type="email" name="email" class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Password</label>
                <input type="password" name="password" class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" required>
            </div>

            <button type="submit" class="w-full bg-emerald-600 text-white p-2 rounded-lg hover:bg-emerald-700 transition duration-300">
                Login
            </button>

            <!-- Link ke Registrasi -->
            <div class="mt-4 text-center">
                <p>Belum punya akun? 
                    <a href="{{ route('registrasi.tampil') }}" class="text-emerald-700 font-bold hover:underline">Daftar</a>
                </p>
            </div>
        </form>
    </div>
</div>

@include('components.footer')
@endsection
