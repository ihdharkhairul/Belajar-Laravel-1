<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LaporBanjirController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BanjirController;

// Data
Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

// Home
Route::get('/', function () {
    return view('welcome');
});

// Nama
Route::get('/nama/{name}', function ($name) {
    return "Hobi Saya $name";
});

// About
Route::get('/about', function () {
    return view('about', [
        'nama'    => 'Muhammad Khairul Ihdhar',
        'tentang' => 'Saya Muhammad Khairul Ihdhar, seorang mahasiswa S1 Terapan Sistem Informasi Kota Cerdas.'
    ]);
});

// Profil
Route::get('/profil', function () {
    return view('profil', [
        'nama'    => 'Muhammad Khairul Ihdhar',
        'nim'     => '707012530002',
        'jurusan' => 'Sistem Informasi Kota Cerdas',
        'tentang' => 'Saya Muhammad Khairul Ihdhar, seorang mahasiswa S1 Terapan Sistem Informasi Kota Cerdas.'
    ]);
});

// Lapor Banjir
Route::get('/lapor-banjir', [LaporBanjirController::class, 'form']);
Route::post('/lapor-banjir/kirim', [LaporBanjirController::class, 'kirim']);

// Students
Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');

// LaporBanjir  Modul 3 - Blade Template
Route::get('/banjir', [BanjirController::class, 'form'])
    ->name('banjir.form');
Route::post('/banjir/kirim', [BanjirController::class, 'kirim'])
    ->name('banjir.kirim');
Route::get('/banjir/konfirmasi', [BanjirController::class, 'konfirmasi'])
    ->name('banjir.konfirmasi');
Route::get('/banjir/daftar', [BanjirController::class, 'daftar'])
    ->name('banjir.daftar');