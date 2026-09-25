<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function form()
    {
        return view('lapor-banjir-form');
    }

    public function kirim(Request $request)
    {
        $nama = $request->input('nama');
        $lokasi = $request->input('lokasi');
        $tinggi = $request->input('tinggi');
        return view('lapor-banjir-konfirmasi', compact('nama', 'lokasi', 'tinggi'));
    }
}
