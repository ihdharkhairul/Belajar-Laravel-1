<div class="laporan-card">
    <div class="card-top">
        <h3>{{ $item['lokasi'] }}</h3>

        @if($item['tinggi'] < 30)
            <span class="badge badge-waspada">Waspada</span>
        @elseif($item['tinggi'] <= 70)
            <span class="badge badge-siaga">Siaga</span>
        @else
            <span class="badge badge-awas">Awas</span>
        @endif
    </div>

    <p>Pelapor: <b>{{ $item['nama'] }}</b></p>
    <p>Tinggi genangan: <b>{{ $item['tinggi'] }} cm</b></p>
    <p>Waktu lapor: {{ $item['waktu'] }}</p>
</div>