{{-- resources/views/auth/login.blade.php --}}
<x-guest-layout>

    <style>
        .login-wrapper{
            width: 450px;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:20px;
        }
        .login-box{
            width:100%;
            max-width:560px; /* FORM GROTER */
        }
        .logo-wrap{
            display:flex;
            justify-content:center;
            margin-bottom:22px;
        }
        .logo-circle{
            height:90px;
            width:90px;
            border-radius:50%;
            border:1px solid #e5e7eb;
            display:flex;
            align-items:center;
            justify-content:center;
            overflow:hidden;
        }
        .logo-circle img{
            height:54px;
            width:auto;
        }
        .card{
            background:#fff;
            border:1px solid #e5e7eb;
            border-radius:18px;
            padding:32px;
            box-shadow:0 10px 30px rgba(0,0,0,.08);

        }
        .card-title{
            font-size:26px;
            font-weight:600;
            color:#111827;
            margin:0;
        }
        .card-subtitle{
            margin-top:4px;
            font-size:14px;
            color:#6b7280;
        }
        .field{
            margin-top:18px;
        }
        .label{
            font-size:14px;
            font-weight:600;
            color:#374151;
            margin-bottom:6px;
            display:block;
        }
        .input{
            width:100%;
            height:50px;
            border:1px solid #d1d5db;
            border-radius:10px;
            padding:0 12px;
            font-size:16px;
        }
        .input:focus{
            border-color:#111827;
            outline:none;
            box-shadow:0 0 0 3px rgba(17,24,39,.15);
        }
        .password-wrap{
            position:relative;
        }
        .toggle-btn{
            position:absolute;
            right:10px;
            top:50%;
            transform:translateY(-50%);
            background:none;
            border:none;
            font-size:13px;
            color:#6b7280;
            cursor:pointer;
        }
        .options{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-top:8px;
            font-size:14px;
        }
        .forgot{
            color:#6b7280;
            text-decoration:underline;
        }
        .btn-submit{
            width:100%;
            height:48px;
            margin-top:18px;
            border:none;
            border-radius:999px;
            background:#e11d48;
            color:#fff;
            font-weight:600;
            font-size:16px;
            cursor:pointer;
            box-shadow:0 6px 14px rgba(225,29,72,.35);
        }
        .btn-submit:hover{
            background:#b50f38;
        }
        .register-line{
            margin-top:14px;
            text-align:center;
            font-size:14px;
            color:#6b7280;
        }
        .register-line a{
            color:#2563eb;
            font-weight:600;
            text-decoration:none;
        }
        .register-line a:hover{
            text-decoration:underline;
        }
    </style>


    <div class="login-wrapper">
        <div class="login-box">

            {{-- Logo --}}
            <div class="logo-wrap">
                <div class="logo-circle">
                    <img src="{{ asset('images/pakosha-logo.png') }}">
                </div>
            </div>

            <div class="card">
                <h1 class="card-title">Welkom terug</h1>
                <p class="card-subtitle">Log in om door te gaan</p>

                <x-auth-session-status :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="field">
                        <label class="label">E-mail</label>
                        <input name="email" type="email" value="{{ old('email') }}" placeholder="uw.email@example.com" required autofocus class="input">
                    </div>

                    <div class="field password-wrap">
                        <label class="label">Wachtwoord</label>
                        <input id="password" name="password" type="password" required class="input" autocomplete="current-password">
                        <button type="button" class="toggle-btn" onclick="togglePass()">Toon</button>
                    </div>

                    <div class="options">
                        <label style="display:flex;align-items:center;gap:6px;">
                            <input type="checkbox" name="remember">
                            Ingelogd blijven
                        </label>

                        @if(Route::has('password.request'))
                            <a class="forgot" href="{{ route('password.request') }}">Wachtwoord vergeten?</a>
                        @endif
                    </div>

                    <button class="btn-submit">Inloggen</button>
                </form>

                <p class="register-line">
                    Geen account?
                    <a href="{{ route('register') }}">Registreren</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        function togglePass(){
            const input = document.getElementById('password');
            event.target.textContent = input.type === "password" ? "Verberg" : "Toon";
            input.type = input.type === "password" ? "text" : "password";
        }
    </script>

</x-guest-layout>
