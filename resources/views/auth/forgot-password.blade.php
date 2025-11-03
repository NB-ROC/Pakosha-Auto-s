<x-guest-layout>

    <style>
        /* ===== Layout ===== */
            .forgot-wrap{
                width: 450px;
                display:flex;
                align-items:center;
                justify-content:center;
                padding:20px;
            }
        /* ===== Logo ===== */
        .logo{
            display:flex; justify-content:center; margin-bottom:22px;
        }
        .logo-badge{
            height:88px;width:88px;border-radius:9999px;background: #ffffff;overflow:hidden;
            border:1px solid #e5e7eb; box-shadow:0 4px 14px rgba(0,0,0,.06);
            display:flex;align-items:center;justify-content:center;
        }
        .logo-badge img{ height:52px;width:auto; }

        /* ===== Card ===== */
        .card{
            width: 420px;
              border-radius:18px;
            padding:36px 44px;
            background: white;
        }
        .card h1{
            margin:0; font-size:26px; line-height:1.2; font-weight:800; color: #000000;
        }
        .card p.sub{ margin:.5rem 0 1.25rem; color:#6b7280; font-size:14px; }

        /* ===== Form ===== */
        .field{ margin-top:18px; }
        .label{ display:block; font-size:14px; font-weight:600; color:#374151; margin-bottom:6px; }
        .input{
            width:100%; height:50px; border:1px solid #d1d5db; border-radius:12px;
            padding:0 14px; font-size:16px; background:#fff;
        }
        .input:focus{
            border-color:#111827; outline:0; box-shadow:0 0 0 3px rgba(17,24,39,.12);
        }
        .err{ margin-top:6px; color:#b91c1c; font-size:13px; }

        /* ===== Button ===== */
        .btn{
            width:100%; height:50px; border:0; border-radius:999px;
            margin-top:18px; cursor:pointer; font-weight:700; font-size:16px; color:#fff;
            background:linear-gradient(180deg,#ef4444 0%, #e11d48 100%);        /* rode knop */
        }
        .btn:hover{ filter:brightness(.98); }

        /* ===== Back link ===== */
        .back{
            margin-top:14px; text-align:center; font-size:14px; color:#6b7280;
        }
        .back a{ color:#2563eb; font-weight:600; text-decoration:none; }
        .back a:hover{ text-decoration:underline; }

        @media (max-width: 480px){
            .card{ padding:28px 18px; }
        }
    </style>

    <div class="forgot-wrap">
        <div class="forgot-box">

            <!-- Logo rond -->
            <div class="logo">
                <div class="logo-badge">
                    <img src="{{ asset('images/pakosha-logo.png') }}" alt="Pakosha Autos">
                </div>
            </div>

            <div class="card">
                <h1>Wachtwoord vergeten</h1>
                <p class="sub">Vul je e-mail in. We sturen je een reset-link.</p>

                <!-- Session Status -->
                <x-auth-session-status :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email -->
                    <div class="field">
                        <label for="email" class="label">E-mail</label>
                        <input id="email" name="email" type="email" class="input"
                               placeholder="uw.email@example.com" value="{{ old('email') }}" required autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="err" />
                    </div>

                    <button type="submit" class="btn">Verstuur reset-link</button>
                </form>

                <p class="back">Terug naar <a href="{{ route('login') }}">Inloggen</a></p>
            </div>
        </div>
    </div>

</x-guest-layout>
