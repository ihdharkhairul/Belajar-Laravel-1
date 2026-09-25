<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Hasil</title>
<style>
   body{
    font-family: Georgia, 'Times New Roman', serif;
    color:#ffffff;
    margin:0;
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:48px 16px;
    position:relative;
    background-image:
      linear-gradient(rgba(91, 0, 14, 0.9), rgba(1, 1, 1, 0.82)),
      url('https://telkomuniversity.ac.id/wp-content/uploads/2024/02/Telkom-University-Raih-Peringkat-1-Green-Campus-Swasta-Tawarkan-Fasilitas-Lengkap-dan-Lingkungan-Belajar-yang-Nyaman-.png');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
  }
  .wrap{
    max-width:420px;
    width:100%;
  }
  h1{
    font-size:24px;
    margin:0 0 32px 0;
  }
  .field{
    margin-bottom:18px;
    padding-bottom:14px;
    border-bottom:1px solid rgba(255,255,255,0.3);
    transition:border-color 0.2s ease;
  }
  .field:hover{
    border-bottom:1px solid #ffc4cc;
  }
  .label{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:12px;
    color:#f2b8bf;
    margin:0 0 4px 0;
  }
  .value{
    font-size:18px;
    margin:0;
    color:#ffffff;
  }
  a{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:14px;
    color:#ffffff;
    text-decoration:none;
    border-bottom:1px solid rgba(255,255,255,0.5);
    transition:border-color 0.2s ease, color 0.2s ease;
  }
  a:hover{
    border-bottom:1px solid #ffc4cc;
    color:#ffc4cc;
  }
</style>
</head>
<body>
  <div class="wrap">
    <h1>Data Kamu Telah Diterima</h1>

    <div class="field">
      <p class="label">Nama</p>
      <p class="value">{{ $nama }}</p>
    </div>

    <div class="field">
      <p class="label">Umur</p>
      <p class="value">{{ $umur }}</p>
    </div>

    <div class="field">
      <p class="label">Alamat</p>
      <p class="value">{{ $alamat }}</p>
    </div>

    <a href="/form">← Isi ulang</a>
  </div>
</body>
</html>