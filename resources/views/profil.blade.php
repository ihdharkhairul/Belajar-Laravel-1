<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Perkenalan Diri</title>
<style>
  :root{
    --bg:#ffffff;
    --card:#ffffff;
    --ink:#1a1a1a;
    --sub:#8a8a8a;
    --accent:#1a1a1a;
    --line:#e5e0d8;
    box-sizing:border-box;
    padding-top:env(safe-area-inset-top,0px);
    padding-bottom:env(safe-area-inset-bottom,0px);
  }

  html{scroll-padding-top:env(safe-area-inset-top,0px);}
  *{box-sizing:border-box;}
  body{
    margin:0;
    min-height:100%;
    background:var(--bg);
    color:var(--ink);
    font-family: Georgia, 'Times New Roman', serif;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:32px 16px;
  }
  .card{
    background:var(--card);
    max-width:480px;
    width:100%;
    padding:48px 8px;
  }
  .label{
    font-family: -apple-system, Times Now Roman, 'Segoe UI', sans-serif;
    font-size:11px;
    letter-spacing:0.08em;
    color:var(--sub);
    margin:0 0 6px 0;
  }
  h1{
    font-size:30px;
    line-height:1.2;
    margin:0 0 28px 0;
    font-weight:700;
  }
  .field{
    margin-bottom:20px;
    padding-bottom:16px;
    border-bottom:1px solid var(--line);
  }
  .field:last-child{
    border-bottom:none;
    margin-bottom:0;
    padding-bottom:0;
  }
  .value{
    font-size:18px;
    margin:0;
  }
  .accent{
    color:var(--accent);
  }
  .photo{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    display:block;
    margin:0 auto 24px auto;
    border:1px solid var(--line);
  }
</style>
</head>
<body>
  <div class="card">
    <p class="label" style="text-align:center;">Perkenalan diri</p>
    <h1 style="text-align:center;">Halo, saya <span class="accent">Muhammad Khairul Ihdhar</span></h1>

    <div class="field">
      <p class="label">NIM</p>
      <p class="value">707012530002</p>
    </div>

    <div class="field">
      <p class="label">Jurusan</p>
      <p class="value">Sistem Informasi Kota Cerdas</p>
    </div>
    
    <div class="field" style="text-align:center; border-bottom:none;">
        <a href="/about" class="btn">Tentang Saya</a>
    </div>
</div>
</body>
</html>