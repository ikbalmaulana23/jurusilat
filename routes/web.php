<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/registrasi', function () {
    return view('auth.registrasi');
});

Route::post('masuk', [AuthController::class, 'masuk'])->name('masuk');
Route::post('daftar', [AuthController::class, 'daftar'])->name('daftar');

Route::get('pendaftaran', [PendaftaranController::class, 'index'])->name('index');
Route::post('daftarpeserta', [PendaftaranController::class, 'input'])->name('daftarpeserta');
