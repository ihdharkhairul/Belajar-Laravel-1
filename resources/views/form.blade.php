<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Form Data</title>
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
      linear-gradient(rgba(91, 0, 14, 0.75), rgba(1, 1, 1, 0.48)),
      url('https://telkomuniversity.ac.id/wp-content/uploads/2022/12/12-31-Komitmen-Telkom-University-Untuk-Terus-Berkontribusi-Bagi-Bangsa_.jpg');
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
  label{
    display:block;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:12px;
    color:#f2b8bf;
    margin-bottom:6px;
  }
  input{
    width:100%;
    font-family: Georgia, serif;
    font-size:16px;
    padding:8px 0;
    border:none;
    border-bottom:1px solid rgba(255,255,255,0.5);
    margin-bottom:24px;
    outline:none;
    background:transparent;
    color:#ffffff;
    transition:border-color 0.2s ease;
  }
  input:hover{
    border-bottom:1px solid #ffc4cc;
  }
  input:focus{
    border-bottom:1px solid #ffffff;
  }
  button{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-size:14px;
    background:#ffffff;
    color:#B0021A;
    border:1px solid #ffffff;
    padding:10px 24px;
    cursor:pointer;
    transition:background 0.2s ease, color 0.2s ease;
  }
  button:hover{
    background:#ffc4cc;
    border-color:#ffc4cc;
    color:#7a0011;
  }
</style>
</head>
<body>
  <div class="wrap">
    <h1>Isi Data Diri</h1>
    <form action="/proses" method="POST">
      <label>Nama</label>
      <input type="text" name="nama" required>

      <label>Umur</label>
      <input type="text" name="umur" required>

      <label>Alamat</label>
      <input type="text" name="alamat" required>

      <button type="submit">Kirim</button>
    </form>
  </div>
</body>
</html>