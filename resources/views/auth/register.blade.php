@extends('layouts.registration')


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
                <h1 id="visual-title" class="ww-headline">Fresh Clothes,<br>Fresh Start</h1>
                <p class="ww-lead">WashWise helps laundry shops and their customers keep every order, payment and pickup in
                    one simple place.</p>
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
                    <h2 class="ww-title">Create your account</h2>
                    <p class="ww-sub mb-0">Fields marked <span class="ww-req" aria-hidden="true">*</span><span
                            class="visually-hidden">with an asterisk</span> are required.</p>
                </header>

                {{-- Replace your whole <form>...</form> block with this one --}}
<form  method="POST" action="{{ route('register.store') }}" novalidate>
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row g-3">

                    {{-- Step 1: choose the account type (Admin is intentionally not offered) --}}
                    <fieldset class="col-12 ww-field">
                        <legend class="form-label">I'm signing up as <span class="ww-req" aria-hidden="true">*</span></legend>
                        <div class="row g-3">
                            <div class="col-6">
                                <label class="ww-choice">
                                    <input type="radio" name="role" value="customer" class="ww-choice__input"
                                           {{ old('role', 'customer') === 'customer' ? 'checked' : '' }} required>
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
                                           {{ old('role') === 'staff' ? 'checked' : '' }}>
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
                        @error('role')<div class="text-danger small mt-1" role="alert">{{ $message }}</div>@enderror
                    </fieldset>

                    {{-- Full name --}}
                    <div class="col-12 ww-field">
                        <label for="name" class="form-label">Full name <span class="ww-req" aria-hidden="true">*</span></label>
                        <div class="ww-ctrl">
                            <span class="ww-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/></svg></span>
                            <input type="text"  name="full_name" value="{{ old('full_name') }}"
                                   class="form-control ww-input @error('full_name') is-invalid @enderror"
                                   autocomplete="name" required minlength="2" maxlength="255"
                                   placeholder="Juan Dela Cruz"
                                   data-msg-required="Please enter your full name."
                                   data-msg-invalid="Your name needs at least 2 characters."
                                   aria-describedby="name-feedback">
                            <div class="invalid-feedback" id="name-feedback">{{ $errors->first('full_name') ?: 'Please enter your full name.' }}</div>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="col-md-6 ww-field">
                        <label for="email" class="form-label">Email address <span class="ww-req" aria-hidden="true">*</span></label>
                        <div class="ww-ctrl">
                            <span class="ww-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2.5"/><path d="M3.5 7l8.5 6 8.5-6"/></svg></span>
                            <input type="email"  name="email" value="{{ old('email') }}"
                                   class="form-control ww-input @error('email') is-invalid @enderror"
                                   autocomplete="email" required maxlength="255"
                                   placeholder="you@@example.com"
                                   data-msg-required="Please enter your email address."
                                   data-msg-invalid="That doesn't look like a valid email address."
                                   aria-describedby="email-feedback">
                            <div class="invalid-feedback" id="email-feedback">{{ $errors->first('email') ?: 'Please enter your email address.' }}</div>
                        </div>
                    </div>

                    {{-- Phone --}}
                    <div class="col-md-6 ww-field">
                        <label for="phone" class="form-label">Phone number <span class="ww-req" aria-hidden="true">*</span></label>
                        <div class="ww-ctrl">
                            <span class="ww-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="7" y="2.5" width="10" height="19" rx="2.5"/><path d="M11 18.5h2"/></svg></span>
                            <input type="tel"  name="phone_number" value="{{ old('phone_number') }}"
                                   class="form-control ww-input @error('phone_number') is-invalid @enderror"
                                   autocomplete="tel" inputmode="tel" required
                                   pattern="\+?[0-9][0-9 ]{6,18}"
                                   placeholder="0917 123 4567"
                                   data-msg-required="Please enter your phone number."
                                   data-msg-invalid="Use digits only (spaces and a leading + are fine)."
                                   aria-describedby="phone-feedback">
                            <div class="invalid-feedback" id="phone-feedback">{{ $errors->first('phone_number') ?: 'Please enter your phone number.' }}</div>
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="col-md-6 ww-field">
                        <label for="password" class="form-label">Password <span class="ww-req" aria-hidden="true">*</span></label>
                        <div class="ww-pass ww-ctrl">
                            <span class="ww-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4.5" y="10.5" width="15" height="10" rx="2.5"/><path d="M8 10.5V8a4 4 0 0 1 8 0v2.5"/></svg></span>
                            <input type="password"  name="password"
                                   class="form-control ww-input @error('password') is-invalid @enderror"
                                   autocomplete="new-password" required minlength="8"
                                   data-msg-required="Please create a password."
                                   data-msg-invalid="Use at least 8 characters."
                                   aria-describedby="password-help password-feedback">
                            <button type="button" class="ww-eye" data-toggle-password aria-controls="password" aria-pressed="false" aria-label="Show password">
    <svg class="ww-eye__on" viewBox="0 0 24 24" aria-hidden="true"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/></svg>
    <svg class="ww-eye__off d-none" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 3l18 18"/><path d="M10.6 5.1A10 10 0 0 1 12 5c6.4 0 10 7 10 7a17 17 0 0 1-3.2 4M6.6 6.6A17 17 0 0 0 2 12s3.6 7 10 7a9.7 9.7 0 0 0 4.4-1"/><path d="M9.9 9.9a3 3 0 0 0 4.2 4.2"/></svg>
</button>
                            <div class="invalid-feedback" id="password-feedback">{{ $errors->first('password') ?: 'Please create a password.' }}</div>
                        </div>

                        <div class="ww-meter" aria-hidden="true">
                            <span class="ww-meter__seg"></span><span class="ww-meter__seg"></span>
                            <span class="ww-meter__seg"></span><span class="ww-meter__seg"></span>
                        </div>
                        <p class="ww-hint mb-0" id="password-help">
                            <span id="strengthLabel" aria-live="polite">8+ characters with upper and lower case letters and a number.</span>
                        </p>
                    </div>

                    {{-- Confirm password --}}
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

                    {{-- Terms --}}
                    <div class="col-12 ww-field">
                        <div class="form-check ww-check">
                            <input class="form-check-input @error('is_agree_terms_conditions') is-invalid @enderror" type="checkbox"
                                   id="terms" name="is_agree_terms_conditions" value="1" required {{ old('is_agree_terms_conditions') ? 'checked' : '' }}
                                   data-msg-required="Please agree to the Terms and Conditions to continue."
                                   aria-describedby="terms-feedback">
                            <label class="form-check-label" for="terms">
                                I agree to the <a href="#" target="_blank" rel="noopener">Terms and Conditions</a>
                                and <a href="#" target="_blank" rel="noopener">Privacy Policy</a> <span class="ww-req" aria-hidden="true">*</span>
                            </label>
                            <div class="invalid-feedback" id="terms-feedback">{{ $errors->first('is_agree_terms_conditions') ?: 'Please agree to the Terms and Conditions to continue.' }}</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn ww-btn w-100" >
                            <span class="spinner-border spinner-border-sm d-none" aria-hidden="true"></span>
                            <span class="ww-btn__label">Create Account</span>
                        </button>
                    </div>
                </div>

                <p class="ww-login text-center mb-0">
                    Already have an account? <a href="{{ route('login') }}">Log in</a>
                </p>
            </form>
            </div>
        </main>
    </div>
@endsection