<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JuriController;
use App\Http\Controllers\SkorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/registrasi', function () {
    return view('auth.registrasi');
});

Route::post('masuk', [AuthController::class, 'masuk'])->name('masuk');
Route::post('daftar', [AuthController::class, 'daftar'])->name('daftar');


Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('pendaftaran', [PendaftaranController::class, 'index'])->name('index');
Route::post('daftarpesertapasangan', [PendaftaranController::class, 'input_pasangan'])->name('daftarpesertapasangan');
Route::get('/jadwal', [DashboardController::class, 'jadwal']);
Route::get('/pendaftaran', [PendaftaranController::class, 'showPage'])->name('page.show');


Route::middleware('admin')->group(function () {;
    Route::get('logout', [AuthController::class, 'keluar'])->name('keluar');
    Route::post('daftarpeserta', [PendaftaranController::class, 'input'])->name('daftarpeserta');
    Route::get('/tampiledit/{id}', [PendaftaranController::class, 'tampiledit'])->name('tampiledit');
    Route::post('/updatedata/{id}', [PendaftaranController::class, 'updatedata'])->name('updatedata');
    Route::post('/delete/{id}', [PendaftaranController::class, 'delete'])->name('delete');
    Route::get('/skorlomba/{id}', [SkorController::class, 'skorlombabyid']);
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


    Route::get('admin', [AdminController::class, 'index']);
    Route::get('admin/peserta', [AdminController::class, 'peserta']);
    Route::get('admin/pasangan', [AdminController::class, 'pasangan']);
    Route::get('admin/regu', [AdminController::class, 'regu']);
    Route::get('admin/ceritera', [AdminController::class, 'ceritera']);

    Route::get('admin/nilai', [AdminController::class, 'nilai']);
    Route::get('admin/tambahjuri', [AdminController::class, 'tambahjuri']);
    Route::post('admin/tambahjuri', [AdminController::class, 'daftarjuri'])->name('daftarjuri');
    Route::get('admin/tambahjadwal', [JadwalController::class, 'index'])->name('indexjadwal');
    Route::get('/inputjadwal', [JadwalController::class, 'inputjadwal']);
    Route::post('/inputjadwal', [JadwalController::class, 'inputjadwalpeserta'])->name('inputjadwal');

    Route::get('juri', [JuriController::class, 'index']);
    Route::get('juri/pasangan', [JuriController::class, 'indexpasangan']);
    Route::get('juri/regu', [JuriController::class, 'indexregu']);
    Route::get('juri/ceritera', [JuriController::class, 'indexceritera']);

    Route::get('rekapnilai', [JuriController::class, 'rekapnilai']);
    Route::get('rekapnilai/pasangan', [JuriController::class, 'rekapnilaipasangan']);
    Route::get('rekapnilai/regu', [JuriController::class, 'rekapnilairegu']);
    Route::get('rekapnilai/ceritera', [JuriController::class, 'rekapnilaiceritera']);

    Route::get('admin/dashliveskor', [AdminController::class, 'dashliveskor']);
    Route::get('admin/liveskor/{id}', [AdminController::class, 'liveskor']);
});
