<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SkorController;
use App\Http\Controllers\AdminController;
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
// Route::get('logout')


Route::post('masuk', [AuthController::class, 'masuk'])->name('masuk');
Route::post('daftar', [AuthController::class, 'daftar'])->name('daftar');

Route::get('pendaftaran', [PendaftaranController::class, 'index'])->name('index');
Route::post('daftarpeserta', [PendaftaranController::class, 'input'])->name('daftarpeserta');
Route::post('daftarpesertapasangan', [PendaftaranController::class, 'input_pasangan'])->name('daftarpesertapasangan');
Route::get('/tampiledit/{id}', [PendaftaranController::class, 'tampiledit'])->name('tampiledit');
Route::post('/updatedata/{id}', [PendaftaranController::class, 'updatedata'])->name('updatedata');
Route::post('/delete/{id}', [PendaftaranController::class, 'delete'])->name('delete');


Route::get('/pendaftaran', [PendaftaranController::class, 'showPage'])->name('page.show');


Route::get('/skor', [SkorController::class, 'index'])->name('indexskor');
Route::get('/skorlomba', [SkorController::class, 'skorlomba'])->name('skorlomba');
Route::post('/tunggal', [SkorController::class, 'tunggal'])->name('skortunggal');

Route::get('/skorpasangan', [SkorController::class, 'skorpasangan'])->name('skorpasangan');
Route::get('/formpasangan', [SkorController::class, 'formpasangan'])->name('formpasangan');
Route::post('/skorpasangan', [SkorController::class, 'inputpasangan'])->name('inputpasangan');


Route::get('/skorregu', [SkorController::class, 'skorregu'])->name('skorregu');
Route::get('/formregu', [SkorController::class, 'formregu'])->name('formregu');
Route::post('/inputregu', [SkorController::class, 'inputregu'])->name('inputregu');

Route::get('/skorceritera', [SkorController::class, 'skorceritera'])->name('skorceritera');
Route::get('/formceritera', [SkorController::class, 'formceritera'])->name('formceritera');
Route::post('/inputceritera', [SkorController::class, 'inputceritera'])->name('inputceritera');


Route::get('/jadwal', [JadwalController::class, 'index'])->name('indexjadwal');
Route::get('/inputjadwal', [JadwalController::class, 'inputjadwal'])->name('inputjadwal');
Route::post('/inputjadwal', [JadwalController::class, 'inputjadwalpeserta'])->name('inputjadwal');

Route::get('admin', [AdminController::class, 'index']);
Route::get('admin/peserta', [AdminController::class, 'peserta']);
Route::get('admin/nilai', [AdminController::class, 'nilai']);
Route::get('admin/liveskor', [AdminController::class, 'liveskor']);
