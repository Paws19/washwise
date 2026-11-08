<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WashWise – Laundry Management System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500&family=DM+Mono:wght@400;500&family=Hanken+Grotesk:wght@400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  
</head>

<body>
    <div
        style="background:#FFFFFF;color:#16202E;font-family:'Hanken Grotesk',sans-serif;font-size:17px;line-height:1.6;overflow-x:clip;min-height:100vh">

        <div style="position:sticky;top:0;z-index:10;background:#FFFFFF;border-bottom:1px solid #D5E1EE">
            <header class="wrap"
                style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px 24px;padding-top:18px;padding-bottom:18px">
                <a href="#top"
                    style="display:inline-flex;align-items:center;gap:9px;font:500 24px 'Fraunces',serif;text-decoration:none;letter-spacing:-0.5px"><svg
                        aria-hidden="true" viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#2F6DB0"
                        stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="4" y="2" width="16" height="20" rx="3" />
                        <circle cx="12" cy="14" r="4.5" />
                        <path d="M8 6h.01M11 6h.01" />
                    </svg><span>Wash<span style="color:#4C8FD6">Wise</span></span></a>
                <nav class="navl">
                    <div class="navl-links">
                        <a href="#features" style="text-decoration:none">Features</a>
                        <a href="#how" style="text-decoration:none">How it works</a>
                        <a href="#notify" style="text-decoration:none">Notifications</a>
                    </div>
                    <div class="navl-actions">
                        <a class="btn line sm" href="/login">Log in</a>
                        <a class="btn solid sm" href="/register">Register</a>
                    </div>
                </nav>
            </header>
        </div>

        <section id="top" class="wrap hero-sec">
            <div class="hero">
                <div>
                    <p class="mono"
                        style="margin:0 0 20px;font-size:13px;letter-spacing:1.5px;text-transform:uppercase;color:#5B6B7F">
                        Laundry management system</p>
                    <h1 class="hero-h1">Every load, <span style="position:relative;white-space:nowrap">accounted
                            for.<svg aria-hidden="true" viewBox="0 0 300 14" preserveAspectRatio="none"
                                style="position:absolute;left:0;bottom:-10px;width:100%;height:12px">
                                <path d="M2 8 C40 2, 70 12, 110 6 S190 3, 230 9 S280 5, 298 7" fill="none"
                                    stroke="#4C8FD6" stroke-width="4" stroke-linecap="round" />
                            </svg></span></h1>
                    <p style="margin:36px 0 36px;max-width:500px;font-size:19px;color:#3D4F65">WashWise gives laundry
                        shops one place for customers, orders, prices and payments, so nobody has to ask twice whether
                        their laundry is ready.</p>
                    <div style="display:flex;gap:14px;flex-wrap:wrap">
                        <a class="btn solid" href="/register">Register</a>
                        <a class="btn line" href="#features">See what's inside</a>
                    </div>
                </div>

                <div style="display:flex;justify-content:center">
                    <div
                        style="width:100%;max-width:380px;transform:rotate(-2.2deg);background:#FBFDFF;border:1.5px solid #16202E;border-radius:10px;box-shadow:6px 7px 0 #D5E1EE;position:relative">
                        <div style="position:absolute;top:-1px;right:34px;width:2px;height:26px;background:#2F6DB0">
                        </div>
                        <div
                            style="padding:22px 24px 18px;display:flex;justify-content:space-between;align-items:baseline">
                            <span class="mono" style="font-size:12px;letter-spacing:1.5px;color:#5B6B7F">CLAIM
                                TICKET</span>
                            <span class="mono" style="font-size:20px;font-weight:500">No. 0231</span>
                        </div>
                        <div style="border-top:1.5px dashed #16202E;padding:18px 24px">
                            <div style="font:500 18px 'Fraunces',serif">Ana Reyes</div>
                            <div class="mono" style="font-size:13px;color:#5B6B7F">Received Oct 31 · pickup Nov 2</div>
                            <div class="mono" style="font-size:14px;margin-top:16px;display:grid;gap:6px">
                                <div style="display:flex;justify-content:space-between"><span>Wash &amp; fold, 4.5
                                        kg</span><span>₱225</span></div>
                                <div style="display:flex;justify-content:space-between"><span>Comforter,
                                        queen</span><span>₱180</span></div>
                                <div
                                    style="display:flex;justify-content:space-between;border-top:1px solid #16202E;padding-top:6px;font-weight:500">
                                    <span>Total</span><span>₱405</span></div>
                            </div>
                        </div>
                        <div style="border-top:1.5px dashed #16202E;padding:18px 24px 22px">
                            <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:4px;text-align:center">
                                <div>
                                    <div style="height:10px;border-radius:5px;background:#2F6DB0"></div>
                                    <div class="mono" style="font-size:11px;margin-top:6px">Received</div>
                                </div>
                                <div>
                                    <div style="height:10px;border-radius:5px;background:#2F6DB0"></div>
                                    <div class="mono" style="font-size:11px;margin-top:6px;font-weight:500">Washing
                                    </div>
                                </div>
                                <div>
                                    <div style="height:10px;border-radius:5px;background:#DCE7F3"></div>
                                    <div class="mono" style="font-size:11px;margin-top:6px;color:#5B6B7F">Ready</div>
                                </div>
                                <div>
                                    <div style="height:10px;border-radius:5px;background:#DCE7F3"></div>
                                    <div class="mono" style="font-size:11px;margin-top:6px;color:#5B6B7F">Picked up
                                    </div>
                                </div>
                            </div>
                            <div style="display:flex;justify-content:space-between;align-items:center;margin-top:20px">
                                <span class="mono" style="font-size:13px">Balance ₱405</span>
                                <span class="mono"
                                    style="font-size:12px;letter-spacing:2px;color:#2F6DB0;border:1.5px solid #2F6DB0;padding:2px 8px;border-radius:3px;transform:rotate(3deg)">UNPAID</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="sp" style="background:#F2F8FE">
            <div class="wrap feat">
                <div>
                    <h2
                        style="margin:0 0 20px;font:500 clamp(32px,3.6vw,46px)/1.1 'Fraunces',serif;letter-spacing:-1px">
                        Everything the counter needs, nothing it doesn't.</h2>
                    <p style="margin:0;max-width:380px;color:#3D4F65">Built around how a laundry shop actually runs: a
                        customer walks in, a load goes through, someone picks it up and pays.</p>
                </div>
                <div>
                    <div class="row" style="border-top:0;padding-top:0">
                        <svg aria-hidden="true" viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#2F6DB0"
                            stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" style="margin-top:2px">
                            <circle cx="12" cy="8" r="4" />
                            <path d="M4 21c0-4 4-6 8-6s8 2 8 6" />
                        </svg>
                        <div>
                            <h3 style="margin:0 0 6px;font:500 22px 'Fraunces',serif">Customer management</h3>
                            <p style="margin:0;color:#3D4F65">One profile per customer with their contact details and
                                past orders. Regulars never have to repeat themselves.</p>
                        </div>
                    </div>
                    <div class="row">
                        <svg aria-hidden="true" viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#2F6DB0"
                            stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" style="margin-top:2px">
                            <path d="M3 7l9-4 9 4v10l-9 4-9-4z" />
                            <path d="M3 7l9 4 9-4M12 11v10" />
                        </svg>
                        <div>
                            <h3 style="margin:0 0 6px;font:500 22px 'Fraunces',serif">Laundry order tracking</h3>
                            <p style="margin:0;color:#3D4F65">Every order gets a ticket and moves from received to
                                washing to ready to picked up. Anyone at the counter can see where a load stands.</p>
                        </div>
                    </div>
                    <div class="row">
                        <svg aria-hidden="true" viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#2F6DB0"
                            stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" style="margin-top:2px">
                            <path d="M3 12V4h8l10 10-8 8z" />
                            <circle cx="7.5" cy="8.5" r="1.2" />
                        </svg>
                        <div>
                            <h3 style="margin:0 0 6px;font:500 22px 'Fraunces',serif">Service and pricing management
                            </h3>
                            <p style="margin:0;color:#3D4F65">List your services and set your own prices, per kilo or
                                per piece. Change a rate once and it applies to new orders.</p>
                        </div>
                    </div>
                    <div class="row">
                        <svg aria-hidden="true" viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#2F6DB0"
                            stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" style="margin-top:2px">
                            <rect x="3" y="6" width="18" height="12" rx="2" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                        <div>
                            <h3 style="margin:0 0 6px;font:500 22px 'Fraunces',serif">Payment tracking</h3>
                            <p style="margin:0;color:#3D4F65">Record deposits and payments against each order, so you
                                always know what's been paid and what's still owed.</p>
                        </div>
                    </div>
                    <div class="row">
                        <svg aria-hidden="true" viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#2F6DB0"
                            stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" style="margin-top:2px">
                            <path d="M4 5h16v11H9l-5 4z" />
                        </svg>
                        <div>
                            <h3 style="margin:0 0 6px;font:500 22px 'Fraunces',serif">SMS or email notifications</h3>
                            <p style="margin:0;color:#3D4F65">Tell customers when their laundry is received or ready, by
                                text or email, without picking up the phone.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="how" class="wrap sp">
            <h2
                style="margin:0 0 56px;font:500 clamp(32px,3.6vw,46px)/1.1 'Fraunces',serif;letter-spacing:-1px;max-width:560px">
                One order, from the door to the pickup.</h2>
            <div class="steps">
                <div class="step"><svg aria-hidden="true" viewBox="0 0 24 24" width="32" height="32" fill="none"
                        stroke="#2F6DB0" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
                        style="display:block;margin-bottom:14px">
                        <path d="M6 3h12v18l-3-2-3 2-3-2-3 2z" />
                        <path d="M9 8h6M9 12h6" />
                    </svg>
                    <h3 style="margin:0 0 8px;font:500 22px 'Fraunces',serif">At the counter</h3>
                    <p style="margin:0;color:#3D4F65">Find or add the customer, choose the services, and the price works
                        itself out. The ticket is ready to hand over.</p>
                </div>
                <div class="step"><svg aria-hidden="true" viewBox="0 0 24 24" width="32" height="32" fill="none"
                        stroke="#2F6DB0" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
                        style="display:block;margin-bottom:14px">
                        <circle cx="12" cy="12" r="8.5" />
                        <path d="M7 12c2-2.5 3 2.5 5 0s3 2.5 5 0" />
                    </svg>
                    <h3 style="margin:0 0 8px;font:500 22px 'Fraunces',serif">In the back</h3>
                    <p style="margin:0;color:#3D4F65">Move the order along as it's washed, dried and folded. The status
                        updates for everyone on the team.</p>
                </div>
                <div class="step"><svg aria-hidden="true" viewBox="0 0 24 24" width="32" height="32" fill="none"
                        stroke="#2F6DB0" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
                        style="display:block;margin-bottom:14px">
                        <circle cx="12" cy="12" r="8.5" />
                        <path d="M8 12.5l3 3 5-6" />
                    </svg>
                    <h3 style="margin:0 0 8px;font:500 22px 'Fraunces',serif">At pickup</h3>
                    <p style="margin:0;color:#3D4F65">The customer gets a message, comes by, pays what's due, and the
                        order closes.</p>
                </div>
            </div>
        </section>

        <section id="notify" class="sp" style="background:#244F86;color:#FFFFFF">
            <div class="wrap note">
                <div style="display:grid;gap:14px;justify-items:start">
                    <div class="mono" style="font-size:12px;letter-spacing:1px;color:#BBD3EE">SMS · 4:12 PM</div>
                    <div
                        style="background:#FFFFFF;color:#16202E;padding:16px 20px;border-radius:18px 18px 18px 4px;max-width:340px;font-size:16px">
                        Hi Ana, your laundry (No. 0231) is ready for pickup. Balance due: ₱405. Thank you!</div>
                    <div class="mono" style="font-size:12px;letter-spacing:1px;color:#BBD3EE;margin-top:10px">EMAIL ·
                        SAME MESSAGE</div>
                    <div
                        style="border:1.5px solid #7FA9D8;padding:14px 20px;border-radius:8px;max-width:340px;font-size:15px;color:#E3EFFB">
                        Subject: Your laundry is ready (No. 0231)</div>
                </div>
                <div>
                    <h2
                        style="margin:0 0 20px;font:500 clamp(32px,3.6vw,46px)/1.1 'Fraunces',serif;letter-spacing:-1px">
                        Fewer "is it ready yet?" calls.</h2>
                    <p style="margin:0;max-width:440px;color:#D9E7F7;font-size:18px">Send customers a text or an email
                        the moment their order is received or ready. They know when to come, and your phone stays free
                        for the next customer.</p>
                </div>
            </div>
        </section>

        <footer class="wrap"
            style="margin-top:calc(var(--sp) - 8px);border-top:1px solid #D5E1EE;padding-top:28px;padding-bottom:40px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:12px;font-size:15px;color:#5B6B7F">
            <span style="font:500 18px 'Fraunces',serif;color:#16202E">WashWise</span>
            <span>Laundry management for laundry shops · © 2026</span>
        </footer>

    </div>
</body>

</html>