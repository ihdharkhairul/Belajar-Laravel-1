<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Lapor Banjir</title>
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
      linear-gradient(rgba(58, 110, 180, 0.35), rgba(58, 110, 180, 0.35)),
      url('https://i.pinimg.com/736x/44/c2/3d/44c23db3ec89e9d138874e79458eea52.jpg');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
  }
  .wrap{
    max-width:420px;
    width:100%;
  }
  .card{
    background:rgba(10, 39, 90, 0.3);
    backdrop-filter:blur(6px);
    -webkit-backdrop-filter:blur(6px);
    border:1px solid rgba(255,255,255,0.25);
    padding:40px 36px;
    border-radius:12px;
  }
  .eyebrow{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:12px;
    letter-spacing:0.06em;
    color:#cfe0f5;
    margin:0 0 10px 0;
  }
  h1{
    font-size:28px;
    font-weight:400;
    margin:0 0 8px 0;
  }
  .sub{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:14px;
    color:#cfe0f5;
    margin:0 0 36px 0;
  }
  label{
    display:block;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:12px;
    color:#cfe0f5;
    margin-bottom:8px;
    transition:color 0.2s ease;
  }
  .group{
    margin-bottom:26px;
  }
  .group:hover label{
    color:#ffffff;
  }
  input{
    width:100%;
    font-family: Georgia, serif;
    font-size:17px;
    padding:6px 0 10px 0;
    border:none;
    border-bottom:1px solid rgba(255,255,255,0.4);
    outline:none;
    background:transparent;
    color:#ffffff;
    transition:border-color 0.2s ease;
  }
  .group:hover input{
    border-bottom:1px solid #ffffff;
  }
  input:focus{
    border-bottom:1px solid #ffffff;
  }
  input::placeholder{
    color:rgba(255,255,255,0.5);
  }
  button{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:14px;
    letter-spacing:0.02em;
    background:transparent;
    color:#ffffff;
    border:1px solid #ffffff;
    padding:12px 28px;
    cursor:pointer;
    margin-top:12px;
    transition:background 0.2s ease, color 0.2s ease;
  }
  button:hover{
    background:#ffffff;
    color:#0a285a;
  }
</style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <p class="eyebrow">LaporBanjir</p>
      <h1>Form Pelaporan Banjir</h1>
      <p class="sub">Laporkan kejadian banjir di wilayah kamu secara cepat.</p>

      <form action="/lapor-banjir/kirim" method="POST">
        @csrf
        <div class="group">
          <label>Nama Pelapor</label>
          <input type="text" name="nama" placeholder="Nama lengkap" required>
        </div>

        <div class="group">
          <label>Lokasi Kejadian (Kecamatan/Desa)</label>
          <input type="text" name="lokasi" placeholder="Contoh: Baleendah / Andir" required>
        </div>

        <div class="group">
          <label>Tinggi Genangan Air (cm)</label>
          <input type="number" name="tinggi" placeholder="Contoh: 50" required>
        </div>

        <button type="submit">Kirim Laporan</button>
      </form>
    </div>
  </div>
</body>
</html>