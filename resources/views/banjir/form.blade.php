@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <div class="panel">
        <p class="eyebrow">LaporBanjir</p>
        <h1>Form Pelaporan Banjir</h1>
        <p class="subtitle">Laporkan kejadian banjir di wilayah kamu secara cepat.</p>

        <form action="{{ route('banjir.kirim') }}" method="POST">
            @csrf

            <div class="field">
                <label for="nama">Nama Pelapor</label>
                <input type="text" id="nama" name="nama" placeholder="Nama lengkap" value="{{ old('nama') }}">
                @error('nama') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <div class="field">
                <label for="lokasi">Lokasi Kejadian (Kecamatan/Desa)</label>
                <input type="text" id="lokasi" name="lokasi" placeholder="Contoh: Baleendah / Andir" value="{{ old('lokasi') }}">
                @error('lokasi') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <div class="field">
                <label for="tinggi">Tinggi Genangan Air (cm)</label>
                <input type="number" id="tinggi" name="tinggi" placeholder="Contoh: 50" value="{{ old('tinggi') }}">
                @error('tinggi') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn">Kirim Laporan</button>
        </form>
    </div>
@endsection