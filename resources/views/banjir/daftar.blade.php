@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <div class="page-head">
        <p class="eyebrow">LaporBanjir</p>
        <h2 style="font-size: 30px;">Daftar Laporan Banjir</h2>
        <p class="subtitle" style="margin-bottom: 0;">Laporan terbaru dari warga Kabupaten Bandung.</p>
    </div>

    <div class="grid">
        @forelse($laporan as $item)
            @include('partials.laporan-card', ['item' => $item])
        @empty
            <p class="empty">Belum ada laporan banjir.</p>
        @endforelse
    </div>
@endsection