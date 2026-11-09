<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light">
    <title>Your WashWise verification code</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100% !important;
            background: #F4F6F9;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: collapse;
        }

        a {
            color: #2F6DB0;
        }

        @media only screen and (max-width: 600px) {
            .card {
                border-radius: 0 !important;
            }

            .pad {
                padding-left: 22px !important;
                padding-right: 22px !important;
            }

            .code {
                font-size: 32px !important;
                letter-spacing: 6px !important;
            }

            .btn a {
                display: block !important;
            }
        }
    </style>
</head>

<body style="margin:0;padding:0;background:#F4F6F9;">

    <!-- Preview text shown in the inbox list -->
    <div style="display:none;max-height:0;overflow:hidden;opacity:0;color:#F4F6F9;font-size:1px;line-height:1px;">
        Your WashWise verification code is {{ $code }}. It expires in 10 minutes.
    </div>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#F4F6F9;">
        <tr>
            <td align="center" style="padding:32px 12px;">

                <table role="presentation" class="card" width="560" cellpadding="0" cellspacing="0" border="0"
                    style="width:100%;max-width:560px;background:#FFFFFF;border-radius:16px;overflow:hidden;font-family:'Plus Jakarta Sans',Helvetica,Arial,sans-serif;color:#16202E;">

                    <!-- Header -->
                    <tr>
                        <td class="pad" align="left"
                            style="padding:28px 40px;background:#EEF6FE;border-bottom:1px solid #DAE2EC;">
                            <span style="font-size:24px;font-weight:800;letter-spacing:-0.5px;color:#244F86;">Wash<span
                                    style="color:#4C8FD6;">Wise</span></span>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td class="pad" style="padding:40px 40px 8px;">
                            <h1
                                style="margin:0 0 12px;font-size:26px;line-height:1.25;font-weight:800;letter-spacing:-0.5px;color:#16202E;">
                                Verify your email</h1>
                            <p style="margin:0;font-size:16px;line-height:1.65;color:#3D4F65;">
                                Hi <strong style="color:#16202E;">Ana</strong>, thanks for signing up for WashWise.
                                Enter this code to confirm your email address and finish creating your account.
                            </p>
                        </td>
                    </tr>

                    <!-- Code -->
                    <tr>
                        <td class="pad" align="center" style="padding:28px 40px 8px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td align="center"
                                        style="background:#F2F8FE;border:1.5px solid #CFE0F3;border-radius:14px;padding:22px 12px;">
                                        <div
                                            style="font-size:12px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:#5B6B7F;margin-bottom:10px;">
                                            Your verification code</div>
                                        <div class="code"
                                            style="font-family:'Courier New',Courier,monospace;font-size:40px;line-height:1;font-weight:700;letter-spacing:10px;color:#244F86;padding-left:10px;">
                                            {{ $code }}</div>
                                    </td>
                                </tr>
                            </table>
                            <p style="margin:14px 0 0;font-size:14px;line-height:1.5;color:#5B6B7F;">This code expires
                                in <strong style="color:#16202E;">10 minutes</strong>.</p>
                        </td>
                    </tr>

                    <!-- Button -->
                    <tr>
                        <td class="pad btn" align="center" style="padding:24px 40px 8px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0"
                                style="margin:0 auto;">
                                <tr>
                                    <td align="center" bgcolor="#2F6DB0" style="border-radius:12px;">
                                        <a href="https://example.com/verify.html?email=ana@example.com"
                                            style="display:inline-block;padding:15px 34px;font-size:16px;font-weight:700;color:#FFFFFF;text-decoration:none;border-radius:12px;background:#2F6DB0;">Verify
                                            email</a>
                                    </td>
                                </tr>
                            </table>
                            <p style="margin:14px 0 0;font-size:13px;line-height:1.5;color:#5B6B7F;">Button not working?
                                Copy the code above and enter it on the verification page.</p>
                        </td>
                    </tr>

                    <!-- Safety note -->
                    <tr>
                        <td class="pad" style="padding:28px 40px 36px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td
                                        style="border-top:1px solid #DAE2EC;padding-top:22px;font-size:14px;line-height:1.65;color:#5B6B7F;">
                                        Didn't create a WashWise account? You can safely ignore this email. Someone may
                                        have typed your address by mistake. For your security, never share this code
                                        with anyone.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td class="pad" align="center"
                            style="padding:22px 40px;background:#F4F6F9;font-size:12px;line-height:1.6;color:#6B7B8F;">
                            <strong style="color:#244F86;">WashWise</strong> · Laundry Management System<br>
                            This is an automated message, please don't reply to this email.
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>

</html>