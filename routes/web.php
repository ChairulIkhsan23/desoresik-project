<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/auth/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
Route::post('/auth/registrasi', [AuthController::class, 'prosesRegistrasi'])->name('registrasi.proses');

Route::get('/auth/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
Route::post('/auth/login', [AuthController::class, 'login'])->name('login.proses');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');
