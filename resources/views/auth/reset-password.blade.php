{{-- resources/views/auth/reset-password.blade.php --}}
<x-guest-layout>

    <style>
        /* Layout */
        .reset-wrap{min-height:100vh;display:flex;align-items:center;justify-content:center;background:#fff;padding:24px}
        .box{width:100%;max-width:680px}
        .logo{display:flex;justify-content:center;margin-bottom:22px}
        .badge{height:88px;width:88px;border-radius:9999px;background:#fff;border:1px solid #e5e7eb;box-shadow:0 4px 14px rgba(0,0,0,.06);display:flex;align-items:center;justify-content:center;overflow:hidden}
        .badge img{height:52px;width:auto}

        /* Card */
        .card{background:#fff;border:1px solid #e5e7eb;border-radius:18px;padding:36px 44px;box-shadow:0 12px 34px rgba(0,0,0,.08)}
        .card h1{margin:0;font-size:26px;line-height:1.2;font-weight:800;color:#111827}
        .card p.sub{margin:.5rem 0 1.25rem;color:#6b7280;font-size:14px}

        /* Fields */
        .field{margin-top:18px}
        .label{display:block;font-size:14px;font-weight:600;color:#374151;margin-bottom:6px}
        .input{width:100%;height:50px;border:1px solid #d1d5db;border-radius:12px;padding:0 14px;font-size:16px;background:#fff}
        .input:focus{border-color:#111827;outline:0;box-shadow:0 0 0 3px rgba(17,24,39,.12)}
        .pwrap{position:relative}
        .toggle{position:absolute;right:10px;top:50%;transform:translateY(-50%);background:none;border:0;font-size:13px;color:#6b7280;cursor:pointer}

        /* Strength */
        .strength{height:8px;background:#f1f5f9;border-radius:999px;overflow:hidden;margin-top:10px}
        .strength > span{display:block;height:100%;width:0;border-radius:999px;background:linear-gradient(90deg,#22c55e,#ef4444)}
        .rules{display:grid;grid-template-columns:1fr 1fr;gap:6px 14px;margin-top:10px;font-size:13px}
        .rule{display:flex;align-items:center;gap:8px;color:#6b7280}
        .rule.ok{color:#16a34a}
        .rule i{display:inline-block;width:16px;text-align:center}

        /* Errors */
        .error{margin-top:6px;color:#b91c1c;font-size:13px}

        /* Button */
        .btn{width:100%;height:50px;border:0;border-radius:999px;margin-top:18px;cursor:pointer;font-weight:700;font-size:16px;color:#fff;background:linear-gradient(180deg,#ef4444 0%, #e11d48 100%);box-shadow:0 12px 24px rgba(225,29,72,.35),inset 0 2px 0 rgba(255,255,255,.25)}
        .btn[disabled]{opacity:.55;cursor:not-allowed;box-shadow:none}
        .btn:not([disabled]):hover{filter:brightness(.98)}

        .back{margin-top:14px;text-align:center;font-size:14px;color:#6b7280}
        .back a{color:#2563eb;font-weight:600;text-decoration:none}
        .back a:hover{text-decoration:underline}

        @media (max-width:480px){.card{padding:28px 18px}}
    </style>

    <div class="reset-wrap">
        <div class="box">
            <div class="logo">
                <div class="badge">
                    <img src="{{ asset('images/pakosha-logo.png') }}" alt="Pakosha Autos">
                </div>
            </div>

            <div class="card">
                <h1>Wachtwoord resetten</h1>
                <p class="sub">Werk je e-mail bij (indien nodig) en kies een nieuw sterk wachtwoord.</p>

                {{-- Status (optioneel) --}}
                <x-auth-session-status :status="session('status')" />

                <form id="resetForm" method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    {{-- Email: bewerkbaar --}}
                    <div class="field">
                        <label for="email" class="label">E-mail</label>
                        <input id="email" name="email" type="email" class="input"
                               value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="error" />
                    </div>

                    {{-- Password + strength --}}
                    <div class="field pwrap">
                        <label for="password" class="label">Nieuw wachtwoord</label>
                        <input id="password" name="password" type="password" class="input" required autocomplete="new-password" aria-describedby="rules">
                        <x-input-error :messages="$errors->get('password')" class="error" />



                    {{-- Confirm --}}
                    <div class="field pwrap">
                        <label for="password_confirmation" class="label">Bevestig wachtwoord</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="input" required autocomplete="new-password">
                        <div id="matchMsg" class="error" style="display:none">Wachtwoorden komen niet overeen</div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="error" />
                    </div>
                        <div class="strength" aria-hidden="true"><span id="bar"></span></div>
                        <div id="rules" class="rules">
                            <div class="rule" data-rule="len"><i>•</i>Minimaal 12 tekens</div>
                            <div class="rule" data-rule="upper"><i>•</i>Min. 1 hoofdletter</div>
                            <div class="rule" data-rule="lower"><i>•</i>Min. 1 kleine letter</div>
                            <div class="rule" data-rule="num"><i>•</i>Min. 1 cijfer</div>
                            <div class="rule" data-rule="sym"><i>•</i>Min. 1 symbool (!@#$%^&*)</div>
                        </div>
                    </div>

                    <button id="submitBtn" class="btn" disabled>Reset wachtwoord</button>
                </form>

                <p class="back">Terug naar <a href="{{ route('login') }}">Inloggen</a></p>
            </div>
        </div>
    </div>

    <script>
        function togglePass(id, btn){
            const el = document.getElementById(id);
            const now = el.type === 'password' ? 'text' : 'password';
            el.type = now; btn.textContent = now === 'password' ? 'Toon' : 'Verberg';
        }

        const pwd = document.getElementById('password');
        const conf = document.getElementById('password_confirmation');
        const email = document.getElementById('email');
        const bar  = document.getElementById('bar');
        const rules = {
            len:  v => v.length >= 12,
            upper:v => /[A-Z]/.test(v),
            lower:v => /[a-z]/.test(v),
            num:  v => /\d/.test(v),
            sym:  v => /[^A-Za-z0-9]/.test(v),
        };
        const submitBtn = document.getElementById('submitBtn');
        const matchMsg  = document.getElementById('matchMsg');

        function updateStrength(){
            const val = pwd.value || '';
            const emailLocal = (email.value || '').split('@')[0];
            const score = Object.values(rules).reduce((a,fn)=>a+(fn(val)?1:0),0);
            const pct = (score/5)*100;
            bar.style.width = pct + '%';
            bar.style.background = pct < 60 ? '#f87171' : (pct < 100 ? '#fb923c' : '#22c55e');

            // checklist UI
            document.querySelectorAll('.rule').forEach(r=>{
                const key = r.getAttribute('data-rule');
                if (rules[key](val)) { r.classList.add('ok'); r.querySelector('i').textContent = '✔'; }
                else { r.classList.remove('ok'); r.querySelector('i').textContent = '•'; }
            });

            // match check
            const match = !!conf.value && (conf.value === val);
            matchMsg.style.display = match || !conf.value ? 'none' : 'block';

            // enable submit only when all rules + match
            const allOk = score === 5 && match;
            submitBtn.disabled = !allOk;
        }

        // live updates
        ['input','keyup','change'].forEach(evt=>{
            pwd.addEventListener(evt, updateStrength);
            conf.addEventListener(evt, updateStrength);
            email.addEventListener(evt, updateStrength);
        });
        document.addEventListener('DOMContentLoaded', updateStrength);
    </script>

</x-guest-layout>
