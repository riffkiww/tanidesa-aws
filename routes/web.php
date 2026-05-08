<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

// 1. Halaman Beranda (Menu Utama)
Route::get('/', function () {
    return view('welcome');
});

// 2. Halaman Form Pengaduan
Route::get('/pengaduan', function () {
    return view('pengaduan');
});

// 3. Proses terima data dari form pengaduan
Route::post('/lapor', [LaporanController::class, 'store']);

// Halaman Cek Status
Route::get('/status', [LaporanController::class, 'index']);

Route::get('/pengajuan', function () { return view('pengajuan'); });
Route::post('/ajukan-surat', [LaporanController::class, 'storeSurat']);