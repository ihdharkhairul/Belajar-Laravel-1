<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nama/{name}', function ($name) {
    return "Hobi Saya $name";
});

Route::get('/about', function () {
    return view('about', [
        'nama'    => 'Muhammad Khairul Ihdhar',
        'tentang' => 'Saya Muhammad Khairul Ihdhar, seorang mahasiswa S1 Terapan Sistem Informasi Kota Cerdas.'
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        'nama'    => 'Muhammad Khairul Ihdhar',
        'nim'     => '707012530002',
        'jurusan' => 'Sistem Informasi Kota Cerdas',
        'tentang' => 'Saya Muhammad Khairul Ihdhar, seorang mahasiswa S1 Terapan Sistem Informasi Kota Cerdas.'
    ]);
});

use App\Http\Controllers\LaporBanjirController;

Route::get('/lapor-banjir', [LaporBanjirController::class, 'form']);
Route::post('/lapor-banjir/kirim', [LaporBanjirController::class, 'kirim']);

