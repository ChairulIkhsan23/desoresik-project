@extends('layouts.app')

@section('title', 'Registrasi')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="max-w-sm w-full bg-white p-6 rounded-lg shadow-md">
        <!-- Logo dan Nama Aplikasi -->
        <div class="flex items-center justify-center mb-4">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12">
            <div class="h-10 border-l-2 border-gray-400 mx-2"></div>
            <h2 class="text-3xl font-bold text-emerald-700">DesoResik</h2>
        </div>

        <!-- Judul -->
        <h2 class="text-xl font-bold text-gray-800 text-center mb-6">Registrasi</h2>

        <!-- Form Registrasi -->
        <form action="{{ route('registrasi.proses') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Nama</label>
                <input type="text" name="name" class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Email</label>
                <input type="email" name="email" class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Password</label>
                <input type="password" name="password" class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Role</label>
                <select name="role" class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" required>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-emerald-600 text-white p-2 rounded-lg hover:bg-emerald-700 transition duration-300">
                Daftar
            </button>
            
            <!-- Link ke Login -->
            <div class="mt-4 text-center">
                Sudah Punya Akun? 
                <a href="{{ route('login.tampil') }}" class="text-emerald-700 font-bold hover:underline">Login</a>
            </div>
        </form>
    </div>
</div>

<!-- Footer -->
<div class="text-center text-gray-500 text-sm mt-6">
    &copy; {{ date('Y') }} Desoresik. All Rights Reserved.
</div>
@endsection
