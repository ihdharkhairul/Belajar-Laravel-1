<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | LaporBanjir</title>

    <style>
        :root {
            --glass: rgba(18, 48, 100, 0.64);
            --line: rgba(255, 255, 255, 0.18);
            --text: #f4f7fc;
            --muted: #b9c7de;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: var(--text);
            background:
                linear-gradient(rgba(8, 20, 45, .55), rgba(8, 20, 45, .65)),
                url('{{ asset("https://i.pinimg.com/1200x/0c/fe/0d/0cfe0dd30f6b52732ed272f9587442db.jpg") }}') center / cover no-repeat fixed,
                #0e2347;
        }

        /* ---------- Header ---------- */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            padding: 18px 40px;
            background: rgba(8, 20, 45, .45);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--line);
        }
        .brand { font-family: Georgia, serif; font-size: 22px; letter-spacing: .5px; }
        .brand small { display: block; font-family: 'Segoe UI', sans-serif; font-size: 12px; color: var(--muted); letter-spacing: 0; }

        nav { display: flex; gap: 8px; }
        nav a {
            color: var(--muted);
            text-decoration: none;
            font-size: 14px;
            padding: 8px 16px;
            border-radius: 999px;
            transition: .2s;
        }
        nav a:hover { color: #fff; background: rgba(255, 255, 255, .1); }
        nav a.active { color: #fff; background: rgba(255, 255, 255, .18); }

        /* ---------- Konten ---------- */
        main {
            flex: 1;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .panel {
            max-width: 520px;
            margin: 0 auto;
            padding: 40px;
            background: var(--glass);
            backdrop-filter: blur(14px);
            border: 1px solid var(--line);
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .35);
        }
        .eyebrow { font-size: 13px; color: var(--muted); margin-bottom: 8px; }
        h1, h2 { font-family: Georgia, serif; font-weight: normal; }
        h1 { font-size: 30px; margin-bottom: 8px; }
        .subtitle { color: var(--muted); font-size: 15px; margin-bottom: 28px; }

        /* ---------- Form ---------- */
        .field { margin-bottom: 24px; }
        .field label { display: block; font-size: 14px; color: var(--muted); margin-bottom: 6px; }
        .field input {
            width: 100%;
            padding: 8px 0;
            font-family: Georgia, serif;
            font-size: 18px;
            color: #fff;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, .45);
            outline: none;
            transition: .2s;
        }
        .field input::placeholder { color: rgba(255, 255, 255, .4); }
        .field input:focus { border-bottom-color: #fff; }
        .error-text { display: block; margin-top: 6px; font-size: 13px; color: #ff9b9b; }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            font-size: 15px;
            color: #fff;
            text-decoration: none;
            background: transparent;
            border: 1px solid #fff;
            cursor: pointer;
            transition: .2s;
        }
        .btn:hover { background: rgba(255, 255, 255, .15); }
        .link-back { color: #fff; font-size: 15px; text-decoration: none; border-bottom: 1px solid #fff; }

        /* ---------- Konfirmasi ---------- */
        .detail { padding: 14px 0; border-bottom: 1px solid var(--line); }
        .detail span { display: block; font-size: 13px; color: var(--muted); }
        .detail strong { font-family: Georgia, serif; font-size: 20px; font-weight: normal; }

        /* ---------- Alert (komponen) ---------- */
        .alert { padding: 12px 16px; margin-bottom: 24px; font-size: 14px; border-radius: 10px; border: 1px solid; }
        .alert-success { background: rgba(72, 199, 142, .15); border-color: rgba(72, 199, 142, .6); color: #b6f2d6; }
        .alert-error   { background: rgba(255, 99, 99, .15);  border-color: rgba(255, 99, 99, .6);  color: #ffc4c4; }

        /* ---------- Daftar & Kartu ---------- */
        .page-head { text-align: center; margin-bottom: 30px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; }

        .laporan-card {
            padding: 24px;
            background: var(--glass);
            backdrop-filter: blur(14px);
            border: 1px solid var(--line);
            border-radius: 16px;
        }
        .card-top { display: flex; justify-content: space-between; align-items: center; gap: 10px; margin-bottom: 14px; }
        .card-top h3 { font-family: Georgia, serif; font-weight: normal; font-size: 20px; }
        .laporan-card p { font-size: 14px; color: var(--muted); margin-top: 6px; }
        .laporan-card p b { color: #fff; font-weight: 600; }

        .badge { padding: 4px 12px; font-size: 12px; border-radius: 999px; border: 1px solid; white-space: nowrap; }
        .badge-waspada { color: #ffe08a; border-color: #ffe08a; background: rgba(255, 224, 138, .12); }
        .badge-siaga   { color: #ffb36b; border-color: #ffb36b; background: rgba(255, 179, 107, .12); }
        .badge-awas    { color: #ff8f8f; border-color: #ff8f8f; background: rgba(255, 143, 143, .12); }

        .empty { text-align: center; color: var(--muted); }

        /* ---------- Footer ---------- */
        footer {
            padding: 16px;
            text-align: center;
            font-size: 13px;
            color: var(--muted);
            background: rgba(8, 20, 45, .45);
            border-top: 1px solid var(--line);
        }

        @media (max-width: 600px) {
            header { padding: 14px 20px; }
            .panel { padding: 28px 22px; }
        }
    </style>
</head>
<body>

    <header>
        <div class="brand">
            LaporBanjir
            <small>BPBD Kabupaten Bandung</small>
        </div>
        <nav>
            <a href="{{ route('banjir.form') }}" class="{{ request()->routeIs('banjir.form') ? 'active' : '' }}">Form Laporan</a>
            <a href="{{ route('banjir.daftar') }}" class="{{ request()->routeIs('banjir.daftar') ? 'active' : '' }}">Daftar Laporan</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2026 LaporBanjir - BPBD Kabupaten Bandung
    </footer>

</body>
</html>