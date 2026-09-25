<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tentang Saya</title>
<style>
  body{
    font-family: Georgia, 'Times New Roman', serif;
    background:#fff;
    color:#1a1a1a;
    display:flex;
    align-items:center;
    justify-content:center;
    min-height:100vh;
    margin:0;
    padding:32px 16px;
  }
  .card{
    max-width:480px;
    width:100%;
    text-align:center;
  }
  .label{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:11px;
    letter-spacing:0.08em;
    color:#8a8a8a;
  }
  p.value{
    font-size:18px;
    line-height:1.6;
    margin-top:16px;
  }
  a.back{
    display:inline-block;
    margin-top:32px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:14px;
    color:#1a1a1a;
    text-decoration:none;
    border-bottom:1px solid #e5e0d8;
  }
</style>
</head>
<body>
  <div class="card">
    <p class="label">Tentang Saya</p>
    <p class="value">{{ $tentang }}</p>
    <a class="back" href="/profil">← Kembali ke Profil</a>
  </div>
</body>
</html>