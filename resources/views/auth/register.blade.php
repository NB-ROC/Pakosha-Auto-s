{{-- resources/views/auth/register.blade.php --}}
<x-guest-layout>

    <style>
        /* ====== Generic layout ====== */
        .register-wrapper{
            min-height:100vh; display:flex; align-items:center; justify-content:center;
            padding:20px;
        }
        .register-box{  max-width:900px; }

        /* ====== Logo ====== */
        .logo-wrap{ display:flex; justify-content:center; margin-bottom:22px; }
        .logo-circle{
            height:90px; width:90px; border-radius:50%;
            border:1px solid #e5e7eb; background:#fff; overflow:hidden;
            box-shadow:0 4px 15px rgba(0,0,0,.06); display:flex; align-items:center; justify-content:center;
        }
        .logo-circle img{ height:54px; width:auto; }

        .field{ margin-top:22px; } /* extra ruimte */

        /* ====== Card ====== */
        .card{
            background:#fff; border:1px solid #e5e7eb; border-radius:18px; padding:32px;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
            padding:42px 48px; /* meer padding */
        }
        .card-title{ font-size:26px; font-weight:700; color:#111827; margin:0; }
        .card-subtitle{ margin-top:6px; font-size:14px; color:#6b7280; }

        /* ====== Form ====== */
        .field{ margin-top:16px; }
        .label{ display:block; font-size:14px; font-weight:600; color:#374151; margin-bottom:6px; }
        .input{
            width:100%; height:54px; border:1px solid #d1d5db; border-radius:10px; padding:0 12px; font-size:16px;
        }
        .input:focus{ border-color:#111827; outline:none; box-shadow:0 0 0 3px rgba(17,24,39,.15); }

        .grid-2{ display:grid; grid-template-columns:1fr; gap:12px; }
        @media (min-width: 640px){ .grid-2{ grid-template-columns:1fr 1fr; } }

        .password-wrap{ position:relative; }
        .toggle-btn{
            position:absolute; right:10px; top:50%; transform:translateY(-50%);
            background:none; border:none; font-size:13px; color:#6b7280; cursor:pointer;
        }
        .error{ margin-top:6px; color:#b91c1c; font-size:13px; }

        /* ====== Options / terms ====== */
        .options{ display:flex; align-items:center; gap:10px; margin-top:8px; font-size:14px; color:#374151; }
        .options a{ text-decoration:underline; color:#6b7280; }
        .options a:hover{ color:#111827; }

        /* ====== Submit ====== */
        .btn-submit{
            width:100%; height:50px; border:none; border-radius:999px; margin-top:22px;
            background:#e11d48; color:#fff; font-weight:700; font-size:16px; cursor:pointer;
            box-shadow:0 6px 14px rgba(225,29,72,.35);
        }
        .btn-submit:hover{ background:#b50f38; }

        /* ====== Footer link ====== */
        .footer-line{ margin-top:16px; text-align:center; font-size:14px; color:#6b7280; }
        .footer-line a{ color:#2563eb; font-weight:600; text-decoration:none; }
        .footer-line a:hover{ text-decoration:underline; }
    </style>

    <div class="register-wrapper">
        <div class="register-box">

            {{-- Logo --}}
            <div class="logo-wrap">
                <div class="logo-circle">
                    <img src="{{ asset('images/pakosha-logo.png') }}" alt="Pakosha Autos logo">
                </div>
            </div>

            <div class="card">
                <h1 class="card-title">Account aanmaken</h1>
                <p class="card-subtitle">Vul je gegevens in om te registreren</p>

                {{-- Session Status / Validation (Breeze components blijven werken) --}}
                <x-auth-session-status :status="session('status')" />

                <form id="register-form" method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- Hidden full name voor Breeze (wordt gevuld via JS) --}}
                    <input type="hidden" id="full_name" name="name" value="{{ old('name') }}">

                    {{-- Voornaam / Achternaam in 2 kolommen --}}
                    <div class="grid-2 field" style="margin-top:18px">
                        <div>
                            <label for="first_name" class="label">Voornaam</label>
                            <input id="first_name" type="text" class="input" placeholder="Voornaam" value="{{ old('first_name') }}" required autocomplete="given-name">
                            <x-input-error :messages="$errors->get('first_name')" class="error" />
                        </div>
                        <div>
                            <label for="last_name" class="label">Achternaam</label>
                            <input id="last_name" type="text" class="input" placeholder="Achternaam" value="{{ old('last_name') }}" required autocomplete="family-name">
                            <x-input-error :messages="$errors->get('last_name')" class="error" />
                        </div>
                    </div>

                    {{-- E-mail --}}
                    <div class="field">
                        <label for="email" class="label">E-mail</label>
                        <input id="email" name="email" type="email" class="input" placeholder="uw.email@example.com" value="{{ old('email') }}" required autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="error" />
                    </div>

                    {{-- Wachtwoord + toggle --}}
                    <div class="field password-wrap">
                        <label for="password" class="label">Wachtwoord</label>
                        <input id="password" name="password" type="password" class="input" required autocomplete="new-password">
                        <button type="button" class="toggle-btn" onclick="togglePass('password', this)">Toon</button>
                        <x-input-error :messages="$errors->get('password')" class="error" />
                    </div>

                    {{-- Bevestig wachtwoord + toggle --}}
                    <div class="field password-wrap">
                        <label for="password_confirmation" class="label">Bevestig wachtwoord</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="input" required autocomplete="new-password">
                        <button type="button" class="toggle-btn" onclick="togglePass('password_confirmation', this)">Toon</button>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="error" />
                    </div>

                    {{-- Voorwaarden --}}
                    <div class="options">
                        <input type="checkbox" id="terms" required>
                        <label for="terms">Ik ga akkoord met de <a href="#">voorwaarden</a></label>
                    </div>

                    <button type="submit" class="btn-submit">Registreren</button>
                </form>

                <p class="footer-line">
                    Al een account?
                    <a href="{{ route('login') }}">Inloggen</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        function togglePass(id, btn){
            const el = document.getElementById(id);
            const now = el.type === 'password' ? 'text' : 'password';
            el.type = now;
            btn.textContent = now === 'password' ? 'Toon' : 'Verberg';
        }

        /* Combineer voornaam + achternaam naar Breeze's `name` veld voor submit */
        document.getElementById('register-form').addEventListener('submit', function(){
            const first = (document.getElementById('first_name').value || '').trim();
            const last  = (document.getElementById('last_name').value || '').trim();
            document.getElementById('full_name').value = [first, last].filter(Boolean).join(' ');
        });
    </script>

</x-guest-layout>
