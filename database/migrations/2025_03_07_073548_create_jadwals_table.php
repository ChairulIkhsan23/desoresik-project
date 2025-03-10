<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('tps_id')->constrained('tps')->onDelete('cascade'); // Foreign key ke tps
            $table->unsignedBigInteger('petugas_id')->constrained('users')->onDelete('cascade'); // Foreign key ke users
            $table->date('tanggal');
            $table->time('waktu');
            $table->enum('status', ['belum', 'sedang berjalan', 'selesai'])->default('belum');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
