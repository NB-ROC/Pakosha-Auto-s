<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mijn profiel</title>
    <style>
        :root{
            --bg:#0b1220;
            --panel:#0f1a2e;
            --card:#111f36;
            --border:rgba(255,255,255,.08);
            --text:#e8eefc;
            --muted:rgba(232,238,252,.75);
            --accent:#ff2b2b;
            --accent2:#ff6b00;
            --white:#ffffff;
        }
        *{box-sizing:border-box}
        body{margin:0;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;background:radial-gradient(1200px 600px at 20% -10%, rgba(255,43,43,.25), transparent 60%),
        radial-gradient(900px 500px at 90% 0%, rgba(255,107,0,.20), transparent 55%),
        var(--bg); color:var(--text);}
        a{color:inherit}
        .wrap{max-width:1200px;margin:0 auto;padding:28px 18px 60px}
        .topbar{display:flex;align-items:center;justify-content:space-between;gap:16px;margin-bottom:22px}
        .brand{display:flex;align-items:center;gap:12px}
        .logo{
            width:42px;height:42px;border-radius:12px;
            background:linear-gradient(135deg,var(--accent),var(--accent2));
            box-shadow:0 10px 30px rgba(255,43,43,.18);
        }
        .title{display:flex;flex-direction:column;line-height:1.1}
        .title h1{margin:0;font-size:20px;font-weight:800}
        .title p{margin:3px 0 0;font-size:12px;color:var(--muted)}
        .actions{display:flex;gap:10px;align-items:center}
        .btn{
            border:1px solid var(--border);
            background:rgba(255,255,255,.06);
            color:var(--text);
            padding:10px 12px;border-radius:12px;
            text-decoration:none;cursor:pointer;
            display:inline-flex;align-items:center;gap:8px;
            transition:.15s ease;
        }
        .btn:hover{transform:translateY(-1px);background:rgba(255,255,255,.10)}
        .btn-primary{
            background:linear-gradient(135deg,var(--accent),var(--accent2));
            border:0;color:#fff;font-weight:700;
        }
        .layout{display:grid;grid-template-columns:280px 1fr;gap:18px}
        .sidebar{
            background:rgba(255,255,255,.04);
            border:1px solid var(--border);
            border-radius:18px;
            padding:16px;
        }
        .nav-title{font-size:12px;color:var(--muted);margin:0 0 12px}
        .nav a{
            display:flex;align-items:center;justify-content:space-between;
            padding:12px 12px;border-radius:14px;
            text-decoration:none;border:1px solid transparent;
            color:var(--text);
        }
        .nav a.active{
            background:rgba(255,255,255,.06);
            border-color:var(--border);
        }
        .badge{font-size:11px;padding:4px 8px;border-radius:999px;background:rgba(255,255,255,.08);color:var(--muted)}
        .content{
            background:rgba(255,255,255,.04);
            border:1px solid var(--border);
            border-radius:18px;
            padding:18px;
        }
        .grid{display:grid;grid-template-columns:repeat(12,1fr);gap:14px}
        .card{
            grid-column:span 12;
            background:rgba(255,255,255,.04);
            border:1px solid var(--border);
            border-radius:18px;
            padding:18px;
        }
        .card h2{margin:0 0 12px;font-size:16px}
        .rows{display:grid;grid-template-columns:1fr 1fr;gap:10px}
        .field{
            padding:12px 12px;border-radius:14px;
            background:rgba(0,0,0,.18);
            border:1px solid rgba(255,255,255,.06);
        }
        .field label{display:block;font-size:11px;color:var(--muted);margin-bottom:6px}
        .field div{font-weight:700}
        .footer-actions{margin-top:14px;display:flex;gap:10px;flex-wrap:wrap}
        @media (max-width: 900px){
            .layout{grid-template-columns:1fr}
            .rows{grid-template-columns:1fr}
        }
    </style>
</head>
<body>
<div class="wrap">

    <div class="topbar">
        <div class="brand">
            <div class="logo"></div>
            <div class="title">
                <h1>PakoshaAutos</h1>
                <p>Mijn profiel</p>
            </div>
        </div>

        <div class="actions">
            <a class="btn btn-primary" href="{{ route('profile.edit') }}">Profiel bewerken</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn" type="submit">Uitloggen</button>
            </form>
        </div>
    </div>

    <div class="layout">
        <aside class="sidebar">
            <p class="nav-title">Account</p>
            <nav class="nav">
                <a class="active" href="{{ route('profile.show-profile') }}">
                    Profiel <span class="badge">Actief</span>
                </a>
                <a href="{{ route('profile.edit') }}">
                    Instellingen <span class="badge">Edit</span>
                </a>
            </nav>
        </aside>

        <main class="content">
            <div class="grid">
                <section class="card">
                    <h2>Mijn gegevens</h2>

                    <div class="rows">
                        <div class="field">
                            <label>Naam</label>
                            <div>{{ $user->name }}</div>
                        </div>

                        <div class="field">
                            <label>E-mail</label>
                            <div>{{ $user->email }}</div>
                        </div>

                        <div class="field">
                            <label>Telefoon</label>
                            <div>{{ $user->phone ?? '-' }}</div>
                        </div>

                        <div class="field">
                            <label>Adres</label>
                            <div>{{ $user->address ?? '-' }}</div>
                        </div>

                        <div class="field" style="grid-column: span 2;">
                            <label>Geboortedatum</label>
                            <div>
                                {{ $user->birth_date ? \Carbon\Carbon::parse($user->birth_date)->format('d-m-Y') : '-' }}
                            </div>
                        </div>
                    </div>

                    <div class="footer-actions">
                        <a class="btn btn-primary" href="{{ route('profile.edit') }}">Gegevens aanpassen</a>
                    </div>
                </section>
            </div>
        </main>
    </div>

</div>
</body>
</html>
