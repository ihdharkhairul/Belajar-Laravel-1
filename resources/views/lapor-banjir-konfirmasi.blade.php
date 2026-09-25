<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Konfirmasi Laporan</title>
<style>
  *{ box-sizing:border-box; }
  body{
    font-family: Georgia, 'Times New Roman', serif;
    color:#ffffff;
    margin:0;
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:48px 16px;
    background-image:
      linear-gradient(rgba(10, 40, 90, 0.45), rgba(10, 40, 90, 0.45)),
      url('https://i.pinimg.com/736x/25/e4/ce/25e4ce64b632b4a3814999b2ef81e3f3.jpg');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
  }
  .wrap{
    max-width:420px;
    width:100%;
  }
  .card{
    background:rgba(10, 40, 90, 0.55);
    backdrop-filter:blur(6px);
    -webkit-backdrop-filter:blur(6px);
    border:1px solid rgba(255,255,255,0.25);
    padding:40px 36px;
    border-radius:19px;
  }
  .eyebrow{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:12px;
    letter-spacing:0.06em;
    color:#cfe0f5;
    margin:0 0 10px 0;
  }
  h1{
    font-size:26px;
    font-weight:400;
    margin:0 0 32px 0;
  }
  .field{
    margin-bottom:20px;
    padding-bottom:16px;
    border-bottom:1px solid rgba(255,255,255,0.3);
    transition:border-color 0.2s ease;
  }
  .field:hover{
    border-bottom:1px solid #ffffff;
  }
  .label{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:12px;
    color:#cfe0f5;
    margin:0 0 4px 0;
  }
  .value{
    font-size:18px;
    margin:0;
  }
  a{
    display:inline-block;
    margin-top:12px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:14px;
    color:#ffffff;
    text-decoration:none;
    border-bottom:1px solid rgba(255,255,255,0.5);
    transition:border-color 0.2s ease;
  }
  a:hover{
    border-bottom:1px solid #ffffff;
  }
</style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <p class="eyebrow">LaporBanjir</p>
      <h1>Laporan Diterima</h1>

      <div class="field">
        <p class="label">Nama Pelapor</p>
        <p class="value">{{ $nama }}</p>
      </div>

      <div class="field">
        <p class="label">Lokasi Kejadian</p>
        <p class="value">{{ $lokasi }}</p>
      </div>

      <div class="field">
        <p class="label">Tinggi Genangan Air</p>
        <p class="value">{{ $tinggi }} cm</p>
      </div>

      <a href="/lapor-banjir">← Buat laporan baru</a>
    </div>
  </div>
</body>
</html>