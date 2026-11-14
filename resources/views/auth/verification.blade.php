@extends('layouts.verification')

@section('content')

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

            
<form action="{{ route('verification-code.verify') }}" method="POST" id="verificationForm">
    @csrf

    <fieldset>
        <legend class="visually-hidden">Verification code</legend>

        <div class="ww-otp" id="otp">
            @for ($i = 0; $i < 6; $i++)
                <input
                    type="text"
                    class="ww-otp__box"
                    inputmode="numeric"
                    pattern="[0-9]"
                    maxlength="1"
                    autocomplete="{{ $i === 0 ? 'one-time-code' : 'off' }}"
                    aria-label="Digit {{ $i + 1 }} of 6"
                    required
                >
            @endfor
        </div>

        <input type="hidden" name="verification_code" id="verification_code">

        @error('verification_code')
            <p class="text-danger mt-2">{{ $message }}</p>
        @enderror

        <p class="ww-otp-msg text-danger" id="otpMsg" role="alert"></p>
    </fieldset>

    <button type="submit" class="btn ww-btn w-100 mt-2" >
        <span class="ww-btn__label">Verify</span>
    </button>

    <p class="ww-resend" aria-live="polite">
        Didn't get the code?
        <button type="button" class="ww-link" id="resend">
            Resend code
        </button>
        <span id="timer"></span>
    </p>

    <p class="ww-login text-center mb-0">
        Wrong email?
        <a href="{{ route('register') }}">Go back</a>
    </p>
</form>


            </div>
        </main>
    </div>

@endsection