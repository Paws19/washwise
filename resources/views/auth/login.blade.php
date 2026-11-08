@extends('layouts.login')

@section('content')

<div class="row g-0 min-vh-100">

    <aside class="col-lg-5 ww-visual d-none d-lg-flex" aria-labelledby="visual-title">
        <a href="{{ route('index') }}" class="ww-brand">
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
            <h1 id="visual-title" class="ww-headline">Welcome back,<br>Fresh Start Awaits</h1>
            <p class="ww-lead">Log in to check today's orders, payments and pickups, all in one simple place.</p>
        </div>
    </aside>

    <main class="col-lg-7 ww-panel" id="main">
        <div class="ww-card">

            <a href="{{ route('index') }}" class="ww-brand ww-brand--mobile d-lg-none">
                <svg class="ww-logo" viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="4" y="2" width="16" height="20" rx="3" />
                    <circle cx="12" cy="14" r="4.5" />
                    <path d="M8 6h.01M11 6h.01" />
                </svg>
                <span>Wash<em>Wise</em></span>
            </a>

            <header class="mb-4">
                <h2 class="ww-title">Welcome back</h2>
                <p class="ww-sub mb-0">Log in to your WashWise account.</p>
            </header>

            <form id="loginForm" method="POST" action="#" novalidate>
                <div id="formSuccess" class="alert alert-success d-none" role="status" tabindex="-1">You're in! (Demo
                    mode: no account has been checked yet.)</div>

                <div class="row g-3">
                    <div class="col-12 ww-field">
                        <label for="email" class="form-label">Email address <span class="ww-req"
                                aria-hidden="true">*</span></label>
                        <div class="ww-ctrl">
                            <span class="ww-ico"><svg viewBox="0 0 24 24" aria-hidden="true">
                                    <rect x="3" y="5" width="18" height="14" rx="2.5" />
                                    <path d="M3.5 7l8.5 6 8.5-6" />
                                </svg></span>
                            <input type="email" id="email" name="email" class="form-control ww-input"
                                autocomplete="email" required maxlength="255" placeholder="you@example.com"
                                data-msg-required="Please enter your email address."
                                data-msg-invalid="That doesn't look like a valid email address."
                                aria-describedby="email-feedback">
                            <div class="invalid-feedback" id="email-feedback">Please enter your email address.</div>
                        </div>
                    </div>

                    <div class="col-12 ww-field">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <label for="password" class="form-label">Password <span class="ww-req"
                                    aria-hidden="true">*</span></label>
                            <a href="#" class="ww-forgot">Forgot password?</a>
                        </div>
                        <div class="ww-pass ww-ctrl">
                            <span class="ww-ico"><svg viewBox="0 0 24 24" aria-hidden="true">
                                    <rect x="4.5" y="10.5" width="15" height="10" rx="2.5" />
                                    <path d="M8 10.5V8a4 4 0 0 1 8 0v2.5" />
                                </svg></span>
                            <input type="password" id="password" name="password" class="form-control ww-input"
                                autocomplete="current-password" required data-msg-required="Please enter your password."
                                data-msg-invalid="Please enter your password." aria-describedby="password-feedback">
                            <button type="button" class="ww-eye" data-toggle-password aria-controls="password"
                                aria-pressed="false" aria-label="Show password">
                                <svg class="ww-eye__on" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                                <svg class="ww-eye__off d-none" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M3 3l18 18" />
                                    <path
                                        d="M10.6 5.1A10 10 0 0 1 12 5c6.4 0 10 7 10 7a17 17 0 0 1-3.2 4M6.6 6.6A17 17 0 0 0 2 12s3.6 7 10 7a9.7 9.7 0 0 0 4.4-1" />
                                    <path d="M9.9 9.9a3 3 0 0 0 4.2 4.2" />
                                </svg>
                            </button>
                            <div class="invalid-feedback" id="password-feedback">Please enter your password.</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check ww-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember" value="1">
                            <label class="form-check-label" for="remember">Keep me logged in on this device</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn ww-btn w-100" id="submitBtn">
                            <span class="ww-btn__label">Log in</span>
                        </button>
                    </div>
                </div>

                <p class="ww-login text-center mb-0">
                    New to WashWise? <a href="{{ route('register') }}">Create an account</a>
                </p>
            </form>
        </div>
    </main>
</div>

@endsection