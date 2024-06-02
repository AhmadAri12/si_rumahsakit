<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\LayananDaruratController;
use App\Http\Controllers\TindakanController;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('obat', ObatController::class);
Route::resource('dokter', DokterController::class);
Route::resource('pasien', PasienController::class);
Route::resource('perawat', PerawatController::class);
Route::resource('layanandarurats', LayananDaruratController::class);
Route::resource('tindakan', TindakanController::class);











