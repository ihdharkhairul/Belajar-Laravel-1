<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Muhammad Khoirul Ihdhar</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,400;0,600;1,400&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  :root {
    --ink: #1c1a17;
    --paper: #ece7dc;
    --line: #c9c1b0;
    --moss: #4a5d45;
    box-sizing: border-box;
    padding-top: env(safe-area-inset-top, 0px);
    padding-bottom: env(safe-area-inset-bottom, 0px);
  }
  html { scroll-padding-top: env(safe-area-inset-top, 0px); }
  * { box-sizing: border-box; }
  body {
    margin: 0;
    background: var(--paper);
    color: var(--ink);
    font-family: 'Inter', sans-serif;
    -webkit-font-smoothing: antialiased;
  }

  .wrap {
    max-width: 720px;
    margin: 0 auto;
    padding: 4rem 1.5rem 3rem;
  }

  .mark {
    font-family: 'Fraunces', serif;
    font-size: 0.95rem;
    letter-spacing: 0.02em;
    color: var(--moss);
    margin-bottom: 3.5rem;
  }

  h1 {
    font-family: 'Fraunces', serif;
    font-weight: 400;
    font-size: clamp(2.4rem, 8vw, 3.6rem);
    line-height: 1.08;
    margin: 0 0 1.4rem;
    max-width: 12ch;
  }

  h1 em {
    font-style: italic;
    color: var(--moss);
  }

  .lede {
    font-size: 1.05rem;
    line-height: 1.65;
    max-width: 46ch;
    color: #3a362f;
    margin: 0 0 3rem;
  }

  .links {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem 1.1rem;
    border-top: 1px solid var(--line);
    padding-top: 1.6rem;
  }

  .links a {
    color: var(--ink);
    text-decoration: none;
    font-size: 0.95rem;
    padding-bottom: 2px;
    border-bottom: 1px solid transparent;
    transition: border-color 0.15s ease, color 0.15s ease;
  }

  .links a:hover, .links a:focus-visible {
    border-color: var(--moss);
    color: var(--moss);
  }

  footer {
    max-width: 720px;
    margin: 0 auto;
    padding: 0 1.5rem 2.5rem;
    font-size: 0.8rem;
    color: #857d6c;
  }

  @media (prefers-color-scheme: dark) {
    :root:not([data-theme="light"]) {
      --ink: #eee9dd;
      --paper: #201d19;
      --line: #3a352d;
      --moss: #9fb894;
    }
    :root:not([data-theme="light"]) .lede { color: #c9c2b1; }
    :root:not([data-theme="light"]) footer { color: #6f6a5d; }
  }
  :root[data-theme="dark"] {
    --ink: #eee9dd;
    --paper: #201d19;
    --line: #3a352d;
    --moss: #9fb894;
  }
</style>
</head>
<body>
  <div class="wrap">
    <div class="mark">Home</div>
    <h1>Muhammad Khairul <em>Ihdhar</em></h1>
    <p class="lede">Saya Mahasiswa S1 Terapan Sistem Informasi Kota Cerdas </p>
    <div class="links">
      <a href="#">Tentang saya</a>
      <a href="#">Karya</a>
      <a href="#">Kontak</a>
      <a href="#">Email</a>
    </div>
  </div>
  <footer>© 2026 Muhammad Khairul Ihdhar</footer>
</body>
</html>