<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SkorController;
use App\Http\Controllers\JadwalController;
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
Route::get('/tampiledit/{id}', [PendaftaranController::class, 'tampiledit'])->name('tampiledit');
Route::post('/updatedata/{id}', [PendaftaranController::class, 'updatedata'])->name('updatedata');
Route::post('/delete/{id}', [PendaftaranController::class, 'delete'])->name('delete');

Route::get('/skor', [SkorController::class, 'index'])->name('indexskor');
Route::get('/skorlomba', [SkorController::class, 'skorlomba'])->name('skorlomba');
Route::get('/skorpasangan', [SkorController::class, 'skorpasangan'])->name('skorpasangan');
Route::get('/formpasangan', [SkorController::class, 'formpasangan'])->name('formpasangan');

Route::get('/formregu', [SkorController::class, 'formregu'])->name('formregu');
Route::get('/formceritera', [SkorController::class, 'formceritera'])->name('formceritera');
Route::post('/tunggal', [SkorController::class, 'tunggal'])->name('skortunggal');
Route::post('/pasangan', [SkorController::class, 'pasangan'])->name('skorpasangan');
Route::post('/kelompok', [SkorController::class, 'kelompok'])->name('skorkelompok');
Route::post('/ceritera', [SkorController::class, 'ceritera'])->name('skorceritera');



Route::get('/jadwal', [JadwalController::class, 'index'])->name('indexjadwal');
