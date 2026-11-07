<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Create account · WashWise</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
/* WashWise auth pages — works on top of Bootstrap 5.3 */
:root {
    --ww-blue-700: #255A94;
    --ww-blue-600: #2F6DB0;
    --ww-blue-500: #4C8FD6;
    --ww-blue-100: #E3EFFB;
    --ww-blue-50:  #F2F8FE;
    --ww-ink:      #1D2939;
    --ww-muted:    #5B6B7F;
    --ww-line:     #D9E1EC;
    --ww-gray:     #F4F6F9;
    --ww-radius:   12px;
}

body.ww-auth {
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, 'Segoe UI', sans-serif;
    color: var(--ww-ink);
    background: #fff;
    -webkit-font-smoothing: antialiased;
}

.ww-skip { position: absolute; left: 12px; top: 12px; z-index: 10; background: #fff; padding: 8px 14px; border-radius: 8px; }

/* ---------- Left visual ---------- */
.ww-visual {
    position: sticky; top: 0; height: 100vh;
    flex-direction: column; justify-content: space-between;
    padding: 44px 56px;
    background: linear-gradient(165deg, #EEF5FD 0%, #CFE2F6 100%);
    overflow: hidden;
}
.ww-brand {
    display: inline-flex; align-items: center; gap: 10px;
    color: var(--ww-blue-700); text-decoration: none;
    font-weight: 700; font-size: 1.35rem; letter-spacing: -.02em;
}
.ww-brand em { font-style: normal; color: var(--ww-blue-500); }
.ww-brand--mobile { margin-bottom: 28px; }
.ww-illustration { width: 100%; max-width: 380px; margin: 0 auto; animation: ww-float 6s ease-in-out infinite; }
.ww-headline { font-size: clamp(2rem, 3vw, 2.75rem); font-weight: 700; line-height: 1.1; letter-spacing: -.03em; color: var(--ww-ink); margin: 0 0 14px; }
.ww-lead { color: #3F5167; max-width: 380px; margin: 0; line-height: 1.65; }

.ww-wave   { animation: ww-wave 3.6s linear infinite; }
.ww-tumble { transform-origin: 210px 208px; animation: ww-spin 9s linear infinite; }
.ww-bubble { transform-box: fill-box; transform-origin: center; animation: ww-rise 5s ease-in-out infinite; }
.ww-bubble.b2 { animation-delay: -1.2s; } .ww-bubble.b3 { animation-delay: -2.4s; }
.ww-bubble.b4 { animation-delay: -3.1s; } .ww-bubble.b5 { animation-delay: -4s; }

@keyframes ww-float { 50% { transform: translateY(-8px); } }
@keyframes ww-wave  { to { transform: translateX(-70px); } }
@keyframes ww-spin  { to { transform: rotate(360deg); } }
@keyframes ww-rise  { 0% { transform: translateY(12px); opacity: 0; } 25% { opacity: 1; } 100% { transform: translateY(-34px); opacity: 0; } }

/* ---------- Right panel ---------- */
.ww-panel { display: flex; align-items: center; justify-content: center; padding: 40px 20px; background: #fff; }
.ww-card  { width: 100%; max-width: 560px; animation: ww-in .5s ease both; }
@keyframes ww-in { from { opacity: 0; transform: translateY(14px); } }

.ww-title { font-size: 1.75rem; font-weight: 700; letter-spacing: -.02em; margin: 0 0 6px; }
.ww-sub   { color: var(--ww-muted); font-size: .95rem; }
.ww-req   { color: #C0392B; font-weight: 700; }

.ww-field .form-label, fieldset legend.form-label { font-size: .875rem; font-weight: 600; margin-bottom: 6px; float: none; width: auto; }
fieldset.ww-field { border: 0; padding: 0 calc(var(--bs-gutter-x) * .5); }

/* Inputs */
.ww-input {
    height: 50px; padding: 0 16px;
    border: 1.5px solid var(--ww-line); border-radius: var(--ww-radius);
    background-color: var(--ww-gray); font-size: .95rem; color: var(--ww-ink);
    transition: border-color .2s, box-shadow .2s, background-color .2s;
}
.ww-input::placeholder { color: #8A98AA; }
.ww-input:hover { border-color: #BFCCDC; }
.ww-input:focus { background-color: #fff; border-color: var(--ww-blue-500); box-shadow: 0 0 0 4px rgba(76, 143, 214, .18); }
.form-control.is-invalid, .form-control.is-valid { background-image: none; padding-right: 16px; }
.ww-input.is-invalid { border-color: #D64545; background-color: #fff; }
.ww-input.is-invalid:focus { box-shadow: 0 0 0 4px rgba(214, 69, 69, .15); }
.ww-input.is-valid { border-color: #5BAE8A; }
.invalid-feedback { font-size: .8125rem; margin-top: 6px; }

/* Password field + eye */
.ww-pass { position: relative; }
.ww-pass .ww-input { padding-right: 48px !important; }
.ww-eye {
    position: absolute; top: 0; right: 4px; height: 50px; width: 44px;
    display: grid; place-items: center; background: none; border: 0; border-radius: 10px; color: var(--ww-muted);
}
.ww-eye:hover { color: var(--ww-blue-600); }
.ww-eye svg { width: 20px; height: 20px; fill: none; stroke: currentColor; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }

/* Strength meter */
.ww-meter { display: grid; grid-template-columns: repeat(4, 1fr); gap: 5px; margin-top: 10px; }
.ww-meter__seg { height: 5px; border-radius: 99px; background: var(--ww-line); transition: background-color .25s; }
.ww-hint { font-size: .78rem; color: var(--ww-muted); margin-top: 6px; line-height: 1.4; }
.ww-meter[data-level="1"] .ww-meter__seg:nth-child(-n+1) { background: #D95C5C; }
.ww-meter[data-level="2"] .ww-meter__seg:nth-child(-n+2) { background: #E3A93B; }
.ww-meter[data-level="3"] .ww-meter__seg:nth-child(-n+3) { background: #4C8FD6; }
.ww-meter[data-level="4"] .ww-meter__seg:nth-child(-n+4) { background: #2E9E6B; }
.ww-hint[data-level="1"] { color: #B3382F; } .ww-hint[data-level="2"] { color: #8A5A00; }
.ww-hint[data-level="3"] { color: #1F5E9E; } .ww-hint[data-level="4"] { color: #1B7A50; }

/* Account type cards */
.ww-choice { display: block; height: 100%; cursor: pointer; }
.ww-choice__input { position: absolute; opacity: 0; pointer-events: none; }
.ww-choice__body {
    display: flex; flex-direction: column; gap: 2px; height: 100%;
    padding: 14px 16px; border: 1.5px solid var(--ww-line); border-radius: var(--ww-radius);
    background: #fff; transition: border-color .2s, background-color .2s, box-shadow .2s, transform .2s;
}
.ww-choice__body svg { width: 24px; height: 24px; fill: none; stroke: var(--ww-blue-600); stroke-width: 1.7; stroke-linecap: round; stroke-linejoin: round; margin-bottom: 6px; }
.ww-choice__body strong { font-size: .92rem; }
.ww-choice__body small { color: var(--ww-muted); font-size: .78rem; line-height: 1.35; }
.ww-choice:hover .ww-choice__body { border-color: #AFC6E0; transform: translateY(-1px); }
.ww-choice__input:checked + .ww-choice__body { border-color: var(--ww-blue-500); background: var(--ww-blue-50); box-shadow: 0 0 0 3px rgba(76, 143, 214, .16); }
.ww-choice__input:focus-visible + .ww-choice__body { outline: 3px solid var(--ww-blue-500); outline-offset: 2px; }

/* Checkbox */
.ww-check { font-size: .875rem; color: var(--ww-muted); }
.ww-check .form-check-input { width: 1.15em; height: 1.15em; margin-top: .2em; border-width: 1.5px; border-color: #AEBBCC; }
.ww-check .form-check-input:checked { background-color: var(--ww-blue-600); border-color: var(--ww-blue-600); }
.ww-check .form-check-input:focus { box-shadow: 0 0 0 4px rgba(76, 143, 214, .18); border-color: var(--ww-blue-500); }
.ww-check a, .ww-login a { color: var(--ww-blue-600); font-weight: 600; text-decoration: none; }
.ww-check a:hover, .ww-login a:hover { text-decoration: underline; }

/* Button */
.ww-btn {
    height: 52px; border: 0; border-radius: var(--ww-radius);
    background: var(--ww-blue-600); color: #fff; font-weight: 600; font-size: 1rem;
    display: inline-flex; align-items: center; justify-content: center; gap: 10px;
    transition: background-color .2s, transform .15s, box-shadow .2s;
}
.ww-btn:hover { background: var(--ww-blue-700); color: #fff; transform: translateY(-1px); box-shadow: 0 8px 18px rgba(47, 109, 176, .28); }
.ww-btn:active { transform: translateY(0); box-shadow: none; }
.ww-btn:focus-visible { outline: 3px solid var(--ww-blue-500); outline-offset: 3px; color: #fff; }
.ww-btn:disabled { opacity: .75; transform: none; box-shadow: none; }
.ww-login { margin-top: 22px; font-size: .92rem; color: var(--ww-muted); }

a:focus-visible, .ww-eye:focus-visible { outline: 3px solid var(--ww-blue-500); outline-offset: 2px; }

@media (max-width: 575.98px) { .ww-panel { padding: 28px 16px 40px; } .ww-title { font-size: 1.5rem; } }

@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after { animation: none !important; transition: none !important; }
}


    /* ---- Modern touches on top of washwise-auth.css ---- */
    .ww-visual { background: linear-gradient(160deg, #EEF6FE 0%, #CBE0F5 100%); }
    .ww-visual::before, .ww-visual::after { content: ""; position: absolute; border-radius: 50%; filter: blur(48px); opacity: .7; pointer-events: none; }
    .ww-visual::before { width: 320px; height: 320px; background: #fff; top: -90px; right: -80px; }
    .ww-visual::after  { width: 300px; height: 300px; background: #9CC4EC; bottom: -110px; left: -90px; }
    .ww-visual > * { position: relative; z-index: 1; }
    .ww-brand, .ww-title, .ww-headline { font-weight: 800; letter-spacing: -.03em; }

    .ww-stage { position: relative; width: 100%; max-width: 390px; margin: 0 auto; }
    .ww-stage .ww-illustration { max-width: none; margin: 0; display: block; }
    .ww-chip {
        position: absolute; display: flex; align-items: center; gap: 10px; padding: 10px 14px 10px 10px;
        border-radius: 14px; font-size: .78rem; line-height: 1.25;
        background: rgba(255,255,255,.72); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,.9); box-shadow: 0 10px 30px rgba(36,79,134,.14);
        animation: ww-float 5s ease-in-out infinite;
    }
    .ww-chip b { display: block; font-weight: 700; }
    .ww-chip span { color: var(--ww-muted); }
    .ww-chip i { display: grid; place-items: center; width: 30px; height: 30px; border-radius: 9px; background: var(--ww-blue-600); color: #fff; }
    .ww-chip i svg { width: 16px; height: 16px; fill: none; stroke: currentColor; stroke-width: 2.2; stroke-linecap: round; stroke-linejoin: round; }
    .ww-chip--1 { left: -26px; top: 22%; }
    .ww-chip--2 { right: -22px; bottom: 14%; animation-delay: -2.2s; }
    .ww-chip--2 i { background: #2E9E6B; }

    /* Role picker */
    .ww-role-help { font-size: .82rem; color: var(--ww-muted); margin: 10px 0 0; min-height: 1.3em; }
    .ww-choice { position: relative; }
    .ww-choice__body { padding: 16px; }
    .ww-choice__ico { display: grid; place-items: center; width: 42px; height: 42px; border-radius: 12px; background: var(--ww-blue-100); color: var(--ww-blue-600); margin-bottom: 8px; transition: background-color .2s, color .2s; }
    .ww-choice__ico svg { margin: 0; stroke: currentColor; }
    .ww-choice:hover .ww-choice__body { transform: translateY(-2px); }
    .ww-choice__input:checked + .ww-choice__body .ww-choice__ico { background: var(--ww-blue-600); color: #fff; }
    .ww-choice__tick { position: absolute; top: 12px; right: 12px; width: 22px; height: 22px; border-radius: 50%; background: var(--ww-blue-600); color: #fff; display: none; place-items: center; }
    .ww-choice__tick svg { width: 13px; height: 13px; fill: none; stroke: currentColor; stroke-width: 3; stroke-linecap: round; stroke-linejoin: round; }
    .ww-choice__input:checked ~ .ww-choice__tick { display: grid; animation: ww-pop .25s ease; }
    @keyframes ww-pop { from { transform: scale(.4); opacity: 0; } }

    /* Inputs with leading icons */
    .ww-ctrl { position: relative; }
    .ww-ico { position: absolute; left: 15px; top: 0; height: 50px; display: flex; align-items: center; color: #8394A8; pointer-events: none; transition: color .2s; }
    .ww-ico svg { width: 18px; height: 18px; fill: none; stroke: currentColor; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
    .ww-ctrl:focus-within .ww-ico { color: var(--ww-blue-600); }
    .ww-ctrl .ww-input { padding-left: 44px; }

    .ww-btn { height: 54px; font-weight: 700; background: linear-gradient(180deg, #3A7CC4, var(--ww-blue-600)); box-shadow: 0 6px 16px rgba(47,109,176,.25); }
    .ww-btn:hover { background: linear-gradient(180deg, #3A7CC4, var(--ww-blue-600)); filter: brightness(1.04); box-shadow: 0 12px 24px rgba(47,109,176,.32); }

    @media (max-width: 575.98px) { .ww-choice__body { padding: 14px; } }

</style>
</head>
<body class="ww-auth">
<a class="visually-hidden-focusable ww-skip" href="#main">Skip to the form</a>

<div class="row g-0 min-vh-100">

    <aside class="col-lg-5 ww-visual d-none d-lg-flex" aria-labelledby="visual-title">
        <a href="washwise-landing.html" class="ww-brand">
            <svg class="ww-logo" viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    <rect x="4" y="2" width="16" height="20" rx="3"/><circle cx="12" cy="14" r="4.5"/><path d="M8 6h.01M11 6h.01"/>
</svg>
            <span>Wash<em>Wise</em></span>
        </a>

        <div class="ww-stage">
            <svg class="ww-illustration" viewBox="0 0 420 360" role="img" aria-label="A washing machine with soap bubbles">
                <defs>
                    <clipPath id="drum"><circle cx="210" cy="208" r="58"/></clipPath>
                </defs>
                <ellipse cx="210" cy="332" rx="140" ry="13" fill="#B4CFEA" opacity=".7"/>
                <rect x="110" y="60" width="200" height="262" rx="28" fill="#fff" stroke="#C6D9EE" stroke-width="2"/>
                <path d="M110 118h200" stroke="#E1EBF6" stroke-width="2"/>
                <circle cx="142" cy="89" r="10" fill="#D6E5F6"/>
                <circle cx="172" cy="89" r="10" fill="#D6E5F6"/>
                <rect x="228" y="78" width="60" height="22" rx="11" fill="#EAF3FC"/>
                <circle cx="210" cy="208" r="72" fill="#EAF3FC" stroke="#9DBFE4" stroke-width="8"/>
                <circle cx="210" cy="208" r="58" fill="#D3E4F6"/>
                <g clip-path="url(#drum)">
                    <g class="ww-wave"><path d="M122 214q17.5-14 35 0t35 0t35 0t35 0t35 0t35 0V290H122z" fill="#7FB2E5"/></g>
                    <g class="ww-tumble"><rect x="186" y="186" width="30" height="20" rx="7" fill="#fff" opacity=".9"/><rect x="214" y="214" width="26" height="18" rx="7" fill="#fff" opacity=".75"/></g>
                </g>
                <circle class="ww-bubble b1" cx="78"  cy="170" r="14" fill="none" stroke="#fff" stroke-width="3"/>
                <circle class="ww-bubble b2" cx="344" cy="190" r="10" fill="none" stroke="#fff" stroke-width="3"/>
                <circle class="ww-bubble b3" cx="96"  cy="240" r="7"  fill="#fff" opacity=".8"/>
                <circle class="ww-bubble b4" cx="332" cy="130" r="16" fill="none" stroke="#fff" stroke-width="3"/>
                <circle class="ww-bubble b5" cx="352" cy="250" r="6"  fill="#fff" opacity=".8"/>
            </svg>

            <div class="ww-chip ww-chip--1" aria-hidden="true">
                <i><svg viewBox="0 0 24 24"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></i>
                <div><b>Order No. 0231</b><span>Ready for pickup</span></div>
            </div>
            <div class="ww-chip ww-chip--2" aria-hidden="true">
                <i><svg viewBox="0 0 24 24"><rect x="3" y="6" width="18" height="12" rx="2"/><circle cx="12" cy="12" r="2.5"/></svg></i>
                <div><b>Payment received</b><span>Thank you!</span></div>
            </div>
        </div>

        <div>
            <h1 id="visual-title" class="ww-headline">Fresh Clothes,<br>Fresh Start</h1>
            <p class="ww-lead">WashWise helps laundry shops and their customers keep every order, payment and pickup in one simple place.</p>
        </div>
    </aside>

    <main class="col-lg-7 ww-panel" id="main">
        <div class="ww-card">

            <a href="washwise-landing.html" class="ww-brand ww-brand--mobile d-lg-none">
                <svg class="ww-logo" viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    <rect x="4" y="2" width="16" height="20" rx="3"/><circle cx="12" cy="14" r="4.5"/><path d="M8 6h.01M11 6h.01"/>
</svg>
                <span>Wash<em>Wise</em></span>
            </a>

            <header class="mb-4">
                <h2 class="ww-title">Create your account</h2>
                <p class="ww-sub mb-0">Fields marked <span class="ww-req" aria-hidden="true">*</span><span class="visually-hidden">with an asterisk</span> are required.</p>
            </header>

            <form id="registerForm" method="POST" action="#" novalidate>
                
                <div id="formSuccess" class="alert alert-success d-none" role="status" tabindex="-1">All set! Your details look good. (Demo mode: nothing has been saved yet.)</div>

                <div class="row g-3">

                    <fieldset class="col-12 ww-field">
                        <legend class="form-label">I'm signing up as <span class="ww-req" aria-hidden="true">*</span></legend>
                        <div class="row g-3">
                            <div class="col-6">
                                <label class="ww-choice">
                                    <input type="radio" name="role" value="customer" class="ww-choice__input"
                                           checked required>
                                    <span class="ww-choice__body">
                                        <span class="ww-choice__ico"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/></svg></span>
                                        <strong>Customer</strong>
                                        <small>Drop off and track my laundry</small>
                                    </span>
                                    <span class="ww-choice__tick"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="ww-choice">
                                    <input type="radio" name="role" value="staff" class="ww-choice__input"
                                           >
                                    <span class="ww-choice__body">
                                        <span class="ww-choice__ico"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="3" width="16" height="18" rx="3"/><circle cx="12" cy="10" r="2.5"/><path d="M8 17c.8-2 2.2-3 4-3s3.2 1 4 3"/></svg></span>
                                        <strong>Laundry Staff</strong>
                                        <small>Manage orders for a shop</small>
                                    </span>
                                    <span class="ww-choice__tick"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span>
                                </label>
                            </div>
                        </div>
                        <p class="ww-role-help" id="roleHelp" aria-live="polite"></p>
                    </fieldset>

                    <div class="col-12 ww-field">
                        <label for="name" class="form-label">Full name <span class="ww-req" aria-hidden="true">*</span></label>
                        <div class="ww-ctrl">
                            <span class="ww-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/></svg></span>
                            <input type="text" id="name" name="name"
                                   class="form-control ww-input"
                                   autocomplete="name" required minlength="2" maxlength="255"
                                   placeholder="Juan Dela Cruz"
                                   data-msg-required="Please enter your full name."
                                   data-msg-invalid="Your name needs at least 2 characters."
                                   aria-describedby="name-feedback">
                            <div class="invalid-feedback" id="name-feedback">Please enter your full name.</div>
                        </div>
                    </div>

                    <div class="col-md-6 ww-field">
                        <label for="email" class="form-label">Email address <span class="ww-req" aria-hidden="true">*</span></label>
                        <div class="ww-ctrl">
                            <span class="ww-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2.5"/><path d="M3.5 7l8.5 6 8.5-6"/></svg></span>
                            <input type="email" id="email" name="email"
                                   class="form-control ww-input"
                                   autocomplete="email" required maxlength="255"
                                   placeholder="you@example.com"
                                   data-msg-required="Please enter your email address."
                                   data-msg-invalid="That doesn't look like a valid email address."
                                   aria-describedby="email-feedback">
                            <div class="invalid-feedback" id="email-feedback">Please enter your email address.</div>
                        </div>
                    </div>

                    <div class="col-md-6 ww-field">
                        <label for="phone" class="form-label">Phone number <span class="ww-req" aria-hidden="true">*</span></label>
                        <div class="ww-ctrl">
                            <span class="ww-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="7" y="2.5" width="10" height="19" rx="2.5"/><path d="M11 18.5h2"/></svg></span>
                            <input type="tel" id="phone" name="phone"
                                   class="form-control ww-input"
                                   autocomplete="tel" inputmode="tel" required
                                   pattern="\+?[0-9][0-9 ]{6,18}"
                                   placeholder="0917 123 4567"
                                   data-msg-required="Please enter your phone number."
                                   data-msg-invalid="Use digits only (spaces and a leading + are fine)."
                                   aria-describedby="phone-feedback">
                            <div class="invalid-feedback" id="phone-feedback">Please enter your phone number.</div>
                        </div>
                    </div>

                    <div class="col-md-6 ww-field">
                        <label for="password" class="form-label">Password <span class="ww-req" aria-hidden="true">*</span></label>
                        <div class="ww-pass ww-ctrl">
                            <span class="ww-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4.5" y="10.5" width="15" height="10" rx="2.5"/><path d="M8 10.5V8a4 4 0 0 1 8 0v2.5"/></svg></span>
                            <input type="password" id="password" name="password"
                                   class="form-control ww-input"
                                   autocomplete="new-password" required minlength="8"
                                   data-msg-required="Please create a password."
                                   data-msg-invalid="Use at least 8 characters."
                                   aria-describedby="password-help password-feedback">
                            <button type="button" class="ww-eye" data-toggle-password aria-controls="password" aria-pressed="false" aria-label="Show password">
    <svg class="ww-eye__on" viewBox="0 0 24 24" aria-hidden="true"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/></svg>
    <svg class="ww-eye__off d-none" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 3l18 18"/><path d="M10.6 5.1A10 10 0 0 1 12 5c6.4 0 10 7 10 7a17 17 0 0 1-3.2 4M6.6 6.6A17 17 0 0 0 2 12s3.6 7 10 7a9.7 9.7 0 0 0 4.4-1"/><path d="M9.9 9.9a3 3 0 0 0 4.2 4.2"/></svg>
</button>
                            <div class="invalid-feedback" id="password-feedback">Please create a password.</div>
                        </div>

                        <div class="ww-meter" aria-hidden="true">
                            <span class="ww-meter__seg"></span><span class="ww-meter__seg"></span>
                            <span class="ww-meter__seg"></span><span class="ww-meter__seg"></span>
                        </div>
                        <p class="ww-hint mb-0" id="password-help">
                            <span id="strengthLabel" aria-live="polite">8+ characters with upper and lower case letters and a number.</span>
                        </p>
                    </div>

                    <div class="col-md-6 ww-field">
                        <label for="password_confirmation" class="form-label">Confirm password <span class="ww-req" aria-hidden="true">*</span></label>
                        <div class="ww-pass ww-ctrl">
                            <span class="ww-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4.5" y="10.5" width="15" height="10" rx="2.5"/><path d="M8 10.5V8a4 4 0 0 1 8 0v2.5"/></svg></span>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                   class="form-control ww-input"
                                   autocomplete="new-password" required
                                   data-msg-required="Please confirm your password."
                                   data-msg-invalid="Passwords do not match."
                                   aria-describedby="confirm-feedback">
                            <button type="button" class="ww-eye" data-toggle-password aria-controls="password_confirmation" aria-pressed="false" aria-label="Show password">
    <svg class="ww-eye__on" viewBox="0 0 24 24" aria-hidden="true"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/></svg>
    <svg class="ww-eye__off d-none" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 3l18 18"/><path d="M10.6 5.1A10 10 0 0 1 12 5c6.4 0 10 7 10 7a17 17 0 0 1-3.2 4M6.6 6.6A17 17 0 0 0 2 12s3.6 7 10 7a9.7 9.7 0 0 0 4.4-1"/><path d="M9.9 9.9a3 3 0 0 0 4.2 4.2"/></svg>
</button>
                            <div class="invalid-feedback" id="confirm-feedback">Please confirm your password.</div>
                        </div>
                    </div>

                    <div class="col-12 ww-field">
                        <div class="form-check ww-check">
                            <input class="form-check-input" type="checkbox"
                                   id="terms" name="terms" value="1" required 
                                   data-msg-required="Please agree to the Terms and Conditions to continue."
                                   aria-describedby="terms-feedback">
                            <label class="form-check-label" for="terms">
                                I agree to the <a href="#" target="_blank" rel="noopener">Terms and Conditions</a>
                                and <a href="#" target="_blank" rel="noopener">Privacy Policy</a> <span class="ww-req" aria-hidden="true">*</span>
                            </label>
                            <div class="invalid-feedback" id="terms-feedback">Please agree to the Terms and Conditions to continue.</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn ww-btn w-100" id="submitBtn">
                            <span class="spinner-border spinner-border-sm d-none" aria-hidden="true"></span>
                            <span class="ww-btn__label">Create Account</span>
                        </button>
                    </div>
                </div>

                <p class="ww-login text-center mb-0">
                    Already have an account? <a href="login.html">Log in</a>
                </p>
            </form>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
/* WashWise registration: validation, password strength, show/hide password */
(() => {
    'use strict';

    const form = document.getElementById('registerForm');
    if (!form) return;

    const password = form.querySelector('#password');
    const confirm  = form.querySelector('#password_confirmation');
    const meter    = form.querySelector('.ww-meter');
    const hint     = form.querySelector('#password-help');
    const label    = form.querySelector('#strengthLabel');
    const submit   = form.querySelector('#submitBtn');
    const controls = [...form.querySelectorAll('input:not([type="hidden"])')]
        .filter((el) => el.type !== 'radio');

    const DEFAULT_HINT = label.textContent;
    const LEVELS = ['', 'Weak', 'Fair', 'Good', 'Strong'];

    /* ---------- Password rules (mirror the server-side rules) ---------- */
    const checks = (v) => ({
        length: v.length >= 8,
        mixed:  /[a-z]/.test(v) && /[A-Z]/.test(v),
        number: /\d/.test(v),
        symbol: /[^A-Za-z0-9]/.test(v),
    });

    function updateMeter() {
        const v = password.value;
        if (!v) {
            meter.dataset.level = '0';
            hint.dataset.level = '0';
            label.textContent = DEFAULT_HINT;
            return;
        }
        const c = checks(v);
        let level = [c.length, c.mixed, c.number, c.symbol].filter(Boolean).length;
        if (!c.length) level = Math.min(level, 1);
        level = Math.max(level, 1);
        meter.dataset.level = hint.dataset.level = String(level);
        label.textContent = `Password strength: ${LEVELS[level]}`;
    }

    /* ---------- Validation ---------- */
    function validate(input) {
        input.setCustomValidity('');

        if (input === password && input.value) {
            const c = checks(input.value);
            if (!(c.length && c.mixed && c.number)) {
                input.setCustomValidity('Use 8+ characters with upper and lower case letters and a number.');
            }
        }
        if (input === confirm && input.value !== password.value) {
            input.setCustomValidity('Passwords do not match.');
        }

        const ok = input.checkValidity();
        const feedback = input.closest('.ww-field')?.querySelector('.invalid-feedback');

        if (!ok && feedback) {
            const v = input.validity;
            feedback.textContent = v.customError
                ? input.validationMessage
                : (v.valueMissing ? input.dataset.msgRequired : input.dataset.msgInvalid) || input.validationMessage;
        }

        input.classList.toggle('is-invalid', !ok);
        input.classList.toggle('is-valid', ok && input.type !== 'checkbox' && input.value !== '');
        return ok;
    }

    controls.forEach((input) => {
        let touched = false;
        input.addEventListener('blur', () => { touched = true; validate(input); });
        input.addEventListener('input', () => {
            if (input === password) {
                updateMeter();
                if (confirm.value) validate(confirm);
            }
            if (touched || input.classList.contains('is-invalid')) validate(input);
        });
        input.addEventListener('change', () => { if (input.type === 'checkbox') validate(input); });
    });

    /* ---------- Show / hide password ---------- */
    form.querySelectorAll('[data-toggle-password]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const field = document.getElementById(btn.getAttribute('aria-controls'));
            const show = field.type === 'password';
            field.type = show ? 'text' : 'password';
            btn.setAttribute('aria-pressed', String(show));
            btn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
            btn.querySelector('.ww-eye__on').classList.toggle('d-none', show);
            btn.querySelector('.ww-eye__off').classList.toggle('d-none', !show);
        });
    });

    /* ---------- Submit ---------- */
    form.addEventListener('submit', (e) => {
        const invalid = controls.filter((input) => !validate(input));
        if (invalid.length) {
            e.preventDefault();
            invalid[0].focus();
            return;
        }
        // No backend yet: stop the real submit and show a confirmation instead
        e.preventDefault();
        const done = document.getElementById('formSuccess');
        done.classList.remove('d-none');
        done.focus();
        done.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    });

    // Re-enable the button if the user comes back with the browser's back button
    window.addEventListener('pageshow', (e) => {
        if (e.persisted) {
            submit.disabled = false;
            submit.querySelector('.spinner-border').classList.add('d-none');
            submit.querySelector('.ww-btn__label').textContent = 'Create Account';
        }
    });

    updateMeter();
})();

</script>
<script>
        // Short description under the Customer / Laundry Staff cards
        (function () {
            var text = {
                customer: 'Place orders and follow your laundry from drop-off to pickup.',
                staff: 'Manage customers, orders and payments for your shop.'
            };
            var help = document.getElementById('roleHelp');
            var radios = document.querySelectorAll('input[name="role"]');
            function show() {
                var picked = document.querySelector('input[name="role"]:checked');
                help.textContent = picked ? (text[picked.value] || '') : '';
            }
            radios.forEach(function (r) { r.addEventListener('change', show); });
            show();
        })();
    </script>
</body>
</html>