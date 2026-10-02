<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanjirController extends Controller
{
    // Menampilkan form pelaporan
    public function form()
    {
        return view('banjir.form');
    }

    public function kirim(Request $request)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:100',
            'lokasi' => 'required|string|max:150',
            'tinggi' => 'required|numeric|min:0',
        ], [
            'nama.required'   => 'Nama pelapor wajib diisi.',
            'lokasi.required' => 'Lokasi kejadian wajib diisi.',
            'tinggi.required' => 'Tinggi genangan wajib diisi.',
            'tinggi.numeric'  => 'Tinggi genangan harus berupa angka.',
            'tinggi.min'      => 'Tinggi genangan tidak boleh negatif.',
        ]);

        session()->push('laporan_baru', [
            'nama'   => $data['nama'],
            'lokasi' => $data['lokasi'],
            'tinggi' => (float) $data['tinggi'],
            'waktu'  => now()->format('d M Y, H.i'),
        ]);

        return redirect()->route('banjir.konfirmasi')->with('laporan', $data);
    }

    public function konfirmasi()
    {
        $laporan = session('laporan');

        if (!$laporan) {
            return redirect()->route('banjir.form');
        }

        return view('banjir.konfirmasi', compact('laporan'));
    }


    public function daftar()
    {
    $contoh = [
        ['nama' => 'Muhammad', 'lokasi' => 'Baleendah',   'tinggi' => 25,  'waktu' => now()->subMinutes(45)->format('d M Y, H.i')],
        ['nama' => 'Khairul',  'lokasi' => 'Dayeuhkolot', 'tinggi' => 50,  'waktu' => now()->subHours(2)->format('d M Y, H.i')],
        ['nama' => 'Ihdhar',   'lokasi' => 'Bojongsoang', 'tinggi' => 100, 'waktu' => now()->subHours(5)->format('d M Y, H.i')],
    ];

    $baru = array_reverse(session('laporan_baru', []));

    $laporan = array_merge($baru, $contoh);

    return view('banjir.daftar', compact('laporan'));
    }
}