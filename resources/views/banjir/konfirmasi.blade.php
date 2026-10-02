@extends('layouts.app')

@section('title', 'Laporan Diterima')

@section('content')
    <div class="panel">
        <p class="eyebrow">LaporBanjir</p>
        <h1>Laporan Diterima</h1>

        <x-banjir-alert type="success" message="Laporan banjir kamu berhasil dikirim. Terima kasih!" />

        <div class="detail">
            <span>Nama Pelapor</span>
            <strong>{{ $laporan['nama'] }}</strong>
        </div>

        <div class="detail">
            <span>Lokasi Kejadian</span>
            <strong>{{ $laporan['lokasi'] }}</strong>
        </div>

        <div class="detail">
            <span>Tinggi Genangan Air</span>
            <strong>{{ $laporan['tinggi'] }} cm</strong>
        </div>

        <p style="margin-top: 28px;">
            <a href="{{ route('banjir.form') }}" class="link-back">← Buat laporan baru</a>
        </p>
    </div>
@endsection