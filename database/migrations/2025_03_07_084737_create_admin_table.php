<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Hubungkan dengan tabel users
            $table->string('nama');
            $table->string('nomor_hp')->nullable(); // Nomor HP Admin
            $table->string('alamat')->nullable(); // Alamat Admin
            $table->string('foto')->nullable(); // Foto Profil Admin
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
