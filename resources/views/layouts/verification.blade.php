<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Verify your email · WashWise</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/verification.css') }}">
</head>
<body class="ww-auth">
<a class="visually-hidden-focusable ww-skip" href="#main">Skip to the form</a>

<div class="row g-0 min-vh-100">

    <aside class="col-lg-5 ww-visual d-none d-lg-flex" aria-labelledby="visual-title">
        <a href="washwise-landing.html" class="ww-brand">
            <svg class="ww-logo" viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor"
                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <rect x="4" y="2" width="16" height="20" rx="3" />
                <circle cx="12" cy="14" r="4.5" />
                <path d="M8 6h.01M11 6h.01" />
            </svg>
            <span>Wash<em>Wise</em></span>
        </a>

        <div class="ww-stage">
            <svg class="ww-illustration" viewBox="0 0 420 360" role="img"
                aria-label="A washing machine with soap bubbles">
                <defs>
                    <clipPath id="drum">
                        <circle cx="210" cy="208" r="58" />
                    </clipPath>
                </defs>
                <ellipse cx="210" cy="332" rx="140" ry="13" fill="#B4CFEA" opacity=".7" />
                <rect x="110" y="60" width="200" height="262" rx="28" fill="#fff" stroke="#C6D9EE" stroke-width="2" />
                <path d="M110 118h200" stroke="#E1EBF6" stroke-width="2" />
                <circle cx="142" cy="89" r="10" fill="#D6E5F6" />
                <circle cx="172" cy="89" r="10" fill="#D6E5F6" />
                <rect x="228" y="78" width="60" height="22" rx="11" fill="#EAF3FC" />
                <circle cx="210" cy="208" r="72" fill="#EAF3FC" stroke="#9DBFE4" stroke-width="8" />
                <circle cx="210" cy="208" r="58" fill="#D3E4F6" />
                <g clip-path="url(#drum)">
                    <g class="ww-wave">
                        <path d="M122 214q17.5-14 35 0t35 0t35 0t35 0t35 0t35 0V290H122z" fill="#7FB2E5" />
                    </g>
                    <g class="ww-tumble">
                        <rect x="186" y="186" width="30" height="20" rx="7" fill="#fff" opacity=".9" />
                        <rect x="214" y="214" width="26" height="18" rx="7" fill="#fff" opacity=".75" />
                    </g>
                </g>
                <circle class="ww-bubble b1" cx="78" cy="170" r="14" fill="none" stroke="#fff" stroke-width="3" />
                <circle class="ww-bubble b2" cx="344" cy="190" r="10" fill="none" stroke="#fff" stroke-width="3" />
                <circle class="ww-bubble b3" cx="96" cy="240" r="7" fill="#fff" opacity=".8" />
                <circle class="ww-bubble b4" cx="332" cy="130" r="16" fill="none" stroke="#fff" stroke-width="3" />
                <circle class="ww-bubble b5" cx="352" cy="250" r="6" fill="#fff" opacity=".8" />
            </svg>

            <div class="ww-chip ww-chip--1" aria-hidden="true">
                <i><svg viewBox="0 0 24 24">
                        <path d="M5 12.5l4.5 4.5L19 7.5" />
                    </svg></i>
                <div><b>Order No. 0231</b><span>Ready for pickup</span></div>
            </div>
            <div class="ww-chip ww-chip--2" aria-hidden="true">
                <i><svg viewBox="0 0 24 24">
                        <rect x="3" y="6" width="18" height="12" rx="2" />
                        <circle cx="12" cy="12" r="2.5" />
                    </svg></i>
                <div><b>Payment received</b><span>Thank you!</span></div>
            </div>
        </div>

        <div>
            <h1 id="visual-title" class="ww-headline">Check your inbox,<br>Fresh Start Is Close</h1>
            <p class="ww-lead">We just need to confirm it's really you before you start managing laundry orders.</p>
        </div>
    </aside>

    <main class="col-lg-7 ww-panel" id="main">
        <div class="ww-card">

            <a href="washwise-landing.html" class="ww-brand ww-brand--mobile d-lg-none">
                <svg class="ww-logo" viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="4" y="2" width="16" height="20" rx="3" />
                    <circle cx="12" cy="14" r="4.5" />
                    <path d="M8 6h.01M11 6h.01" />
                </svg>
                <span>Wash<em>Wise</em></span>
            </a>

            <div class="ww-badge" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                    <rect x="3" y="5" width="18" height="14" rx="2.5" />
                    <path d="M3.5 7l8.5 6 8.5-6" />
                </svg>
            </div>

            <header class="mb-4">
                <h2 class="ww-title">Verify your email</h2>
                <p class="ww-sub mb-0">Enter the 6-digit code we sent to <strong id="emailShown">your email
                        address</strong>.</p>
            </header>

            <form id="verifyForm" novalidate>
                <div id="formSuccess" class="alert alert-success d-none" role="status" tabindex="-1">Email verified!
                    (Demo mode: any 6-digit code works for now.)</div>

                <fieldset>
                    <legend class="visually-hidden">Verification code</legend>
                    <div class="ww-otp" id="otp">
                        <input type="text" class="ww-otp__box" inputmode="numeric" pattern="[0-9]*"
                            autocomplete="one-time-code" aria-label="Digit 1 of 6">
                        <input type="text" class="ww-otp__box" inputmode="numeric" pattern="[0-9]*" autocomplete="off"
                            aria-label="Digit 2 of 6">
                        <input type="text" class="ww-otp__box" inputmode="numeric" pattern="[0-9]*" autocomplete="off"
                            aria-label="Digit 3 of 6">
                        <input type="text" class="ww-otp__box" inputmode="numeric" pattern="[0-9]*" autocomplete="off"
                            aria-label="Digit 4 of 6">
                        <input type="text" class="ww-otp__box" inputmode="numeric" pattern="[0-9]*" autocomplete="off"
                            aria-label="Digit 5 of 6">
                        <input type="text" class="ww-otp__box" inputmode="numeric" pattern="[0-9]*" autocomplete="off"
                            aria-label="Digit 6 of 6">
                    </div>
                    <p class="ww-otp-msg" id="otpMsg" role="alert"></p>
                </fieldset>

                <button type="submit" class="btn ww-btn w-100 mt-2" id="submitBtn">
                    <span class="ww-btn__label">Verify</span>
                </button>

                <p class="ww-resend" aria-live="polite">
                    Didn't get the code?
                    <button type="button" class="ww-link" id="resend" disabled>Resend code</button>
                    <span id="timer"></span>
                </p>

                <p class="ww-login text-center mb-0">
                    Wrong email? <a href="register.html">Go back</a>
                </p>
            </form>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (() => {
        'use strict';
        const form = document.getElementById('verifyForm');
        const otp = document.getElementById('otp');
        const boxes = [...otp.querySelectorAll('.ww-otp__box')];
        const msg = document.getElementById('otpMsg');
        const resend = document.getElementById('resend');
        const timer = document.getElementById('timer');
        const LEN = boxes.length;
        const WAIT = 30;

        /* Show the email from the link (verify.html?email=you@example.com) */
        const email = new URLSearchParams(location.search).get('email');
        if (email) document.getElementById('emailShown').textContent = email;

        const code = () => boxes.map((b) => b.value).join('');
        const clearState = () => { otp.classList.remove('is-error', 'is-ok'); msg.textContent = ''; };

        function fill(digits, start) {
            digits.split('').forEach((d, k) => {
                const box = boxes[start + k];
                if (box) { box.value = d; box.classList.add('is-filled'); }
            });
            boxes[Math.min(start + digits.length, LEN - 1)].focus();
        }

        boxes.forEach((box, i) => {
            box.addEventListener('focus', () => box.select());

            box.addEventListener('input', () => {
                clearState();
                const digits = box.value.replace(/\D/g, '');
                if (digits.length > 1) { fill(digits.slice(0, LEN - i), i); return; }   // autofill / fast typing
                box.value = digits;
                box.classList.toggle('is-filled', digits !== '');
                if (digits && i < LEN - 1) boxes[i + 1].focus();
            });

            box.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && !box.value && i > 0) {
                    boxes[i - 1].value = '';
                    boxes[i - 1].classList.remove('is-filled');
                    boxes[i - 1].focus();
                } else if (e.key === 'ArrowLeft' && i > 0) { e.preventDefault(); boxes[i - 1].focus(); }
                else if (e.key === 'ArrowRight' && i < LEN - 1) { e.preventDefault(); boxes[i + 1].focus(); }
            });

            box.addEventListener('paste', (e) => {
                e.preventDefault();
                const digits = (e.clipboardData.getData('text') || '').replace(/\D/g, '').slice(0, LEN);
                if (!digits) return;
                clearState();
                fill(digits, digits.length === LEN ? 0 : i);
            });
        });

        /* Submit (no backend yet: any complete code is accepted) */
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (code().length < LEN) {
                otp.classList.remove('is-error'); void otp.offsetWidth;   // restart the shake
                otp.classList.add('is-error');
                msg.textContent = 'Please enter all 6 digits of your code.';
                (boxes.find((b) => !b.value) || boxes[0]).focus();
                return;
            }
            otp.classList.add('is-ok');
            const done = document.getElementById('formSuccess');
            done.classList.remove('d-none');
            done.focus();
        });

        /* Resend with a short countdown */
        let left = 0, tick;
        function startTimer() {
            left = WAIT; resend.disabled = true;
            const draw = () => { timer.textContent = left > 0 ? 'in ' + left + 's' : ''; };
            draw();
            clearInterval(tick);
            tick = setInterval(() => {
                left -= 1; draw();
                if (left <= 0) { clearInterval(tick); resend.disabled = false; }
            }, 1000);
        }
        resend.addEventListener('click', () => {
            boxes.forEach((b) => { b.value = ''; b.classList.remove('is-filled'); });
            clearState();
            boxes[0].focus();
            startTimer();
            timer.textContent = 'New code sent. Resend again in ' + WAIT + 's';
        });
        startTimer();
    })();
</script>
</body>
</html>