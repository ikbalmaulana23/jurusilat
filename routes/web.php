<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SkorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/registrasi', function () {
    return view('auth.registrasi');
});


Route::post('masuk', [AuthController::class, 'masuk'])->name('masuk');
Route::post('daftar', [AuthController::class, 'daftar'])->name('daftar');

Route::get('pendaftaran', [PendaftaranController::class, 'index'])->name('index');
Route::post('daftarpeserta', [PendaftaranController::class, 'input'])->name('daftarpeserta');

Route::get('/skor', [SkorController::class, 'index'])->name('indexskor');
Route::get('/skorlomba', [SkorController::class, 'skorlomba'])->name('skorlomba');
