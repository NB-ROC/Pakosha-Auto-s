{{-- resources/views/partials/header.blade.php --}}
<header class="site-header">
    <style>
        :root{
            --navy:#0e1b26; --ink:#1a2430; --border:#e6eaf0;
            --blue:#2563eb; --shadow:0 10px 30px rgba(0,0,0,.08);
        }
        .container{max-width:1500px;margin:0 auto;padding:0 16px}
        .topbar{background:#fff}
        .topbar .row{display:flex;gap:16px;align-items:center;justify-content:center;color:var(--ink);font:500 13px/1.2 ui-sans-serif,system-ui,Segoe UI,Roboto,Arial}
        .topbar .row .dot{width:4px;height:4px;border-radius:50%;background:#d0d6dd;margin:0 8px;display:inline-block}

        .nav-shell{padding:10px 0;background:#fff}
        .nav-wrap{background:#fff;border:1px solid var(--border);border-radius:16px;box-shadow:var(--shadow);
            padding:10px 14px;display:flex;align-items:center;justify-content:space-between;gap:12px;position:relative}

        .brand-center{position:absolute;left:50%;transform:translateX(-50%);
            height:70px;width:70px;border-radius:999px;background:#fff;border:1px solid #e7ecf2;
            box-shadow:0 6px 18px rgba(0,0,0,.06);display:flex;align-items:center;justify-content:center;overflow:hidden}
        .brand-center img{height:46px;width:auto;display:block}

        .nav-left,.nav-right{display:flex;align-items:center;gap:18px}
        .nav-list{display:flex;gap:18px;margin:0;padding:0;list-style:none}
        .nav-list a{color:#22313a;text-decoration:none;font:500 15px/1 ui-sans-serif,system-ui,Segoe UI,Roboto,Arial;padding:10px 6px;border-radius:10px;transition:color .15s,background .15s}
        .nav-list a:hover,.nav-list a.active{color:var(--blue)}

        .login-btn{display:inline-flex;align-items:center;justify-content:center;height:40px;padding:0 16px;border-radius:999px;
            background:linear-gradient(180deg,#3b82f6 0%, #1d4ed8 100%);color:#fff;text-decoration:none;font-weight:700;
            box-shadow:0 10px 22px rgba(37,99,235,.25), inset 0 2px 0 rgba(255,255,255,.25)}
        .login-btn:hover{filter:brightness(.98)}

        .hamb{display:none}
        .hamb-btn{display:none;align-items:center;gap:8px;border:1px solid var(--border);height:40px;padding:0 12px;border-radius:10px;background:#fff}
        .hamb-btn span{width:18px;height:2px;background:#2a3440;display:block;position:relative}
        .hamb-btn span::before,.hamb-btn span::after{content:"";position:absolute;left:0;width:18px;height:2px;background:#2a3440}
        .hamb-btn span::before{top:-6px}.hamb-btn span::after{top:6px}

        @media (max-width:860px){
            .brand-center{position:static;transform:none;margin:0 auto}
            .nav-left,.nav-right{display:none}
            .hamb-btn{display:flex}
            .nav-mobile{display:none;margin-top:10px;padding:10px;border-top:1px solid var(--border)}
            .nav-mobile ul{list-style:none;margin:0;padding:0;display:grid;gap:8px}
            .nav-mobile a{display:block;padding:10px 8px;border-radius:10px;color:#22313a;text-decoration:none}
            .nav-mobile a:hover{background:#f3f6f9;color:var(--blue)}
            .hamb:checked ~ .nav-mobile{display:block}
        }
    </style>

    {{-- Topbar --}}


    {{-- Main header --}}
    <div class="nav-shell">
        <div class="container">
            <div class="nav-wrap">
                <div class="topbar">
                    <div class="container">
                        <div class="row" style="padding:8px 0">
                            <span>026-2616116</span><span class="dot"></span><span>ma-vr van 8:00 t/m 18:00</span>
                        </div>
                    </div>
                </div>


                {{-- FIX 1: juiste logo-pad --}}
                <a href="{{ url('/') }}" class="brand-center" aria-label="Pakosha Autos — Home">
                    <img src="{{ asset('images/pakosha-logo.png') }}" alt="Pakosha Autos">
                </a>



                <label class="hamb-btn" for="menuToggle" aria-label="Menu"><span></span><strong>Menu</strong></label>
                <input id="menuToggle" class="hamb" type="checkbox" hidden>

                <nav class="nav-left" aria-label="Links">
                    <ul class="nav-list">
                        <li><a href="{{ url('/diensten') }}">Diensten</a></li>
                        <li><a href="{{ url('/autos') }}">Auto's</a></li>
                        <li><a href="{{ url('/onderdelen') }}" class="{{ request()->is('onderdelen*') ? 'active' : '' }}">Onderdelen</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="{{ url('/contact') }}">login</a></li>

                    </ul>
                </nav>

            </div>
        </div>
    </div>
</header>
