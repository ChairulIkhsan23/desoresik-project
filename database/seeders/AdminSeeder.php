<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk menambahkan akun admin.
     */
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'], // Cek apakah admin sudah ada berdasarkan email
            [
                'name'     => 'Administrator',
                'password' => Hash::make('chairul123'), // Ganti dengan password yang aman
                'role'     => 'admin',
            ]
        );
    }
}
