<!DOCTYPE html>
<html lang="hu">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Új üzenet - Somigumi kapcsolatfelvétel</title>
        <style>
            body {
                font-family: 'Segoe UI', Arial, sans-serif;
                background: #f4f6fb;
                color: #222;
                margin: 0;
                padding: 0;
            }

            .mail-container {
                max-width: 540px;
                margin: 40px auto;
                background: #fff;
                border-radius: 14px;
                box-shadow: 0 4px 24px 0 #1e40af22;
                overflow: hidden;
            }

            .brand-header {
                background: linear-gradient(90deg, #1e40af 0%, #2563eb 100%);
                color: #fff;
                padding: 32px 32px 18px 32px;
                text-align: left;
            }

            .brand-header h1 {
                margin: 0 0 8px 0;
                font-size: 2rem;
                letter-spacing: 0.5px;
            }

            .brand-header p {
                margin: 0;
                font-size: 1.1rem;
                opacity: 0.85;
            }

            .meta {
                padding: 24px 32px 0 32px;
                font-size: 1rem;
            }

            .meta strong {
                color: #1e40af;
            }

            .meta .row {
                margin-bottom: 8px;
            }

            .message-block {
                margin: 32px 32px 0 32px;
                background: #f1f5fd;
                border-left: 4px solid #2563eb;
                padding: 24px 20px 24px 24px;
                border-radius: 8px;
                font-size: 1.15rem;
                color: #1e293b;
            }

            .footer {
                margin: 32px 0 0 0;
                background: #f3f4f6;
                color: #6b7280;
                text-align: center;
                font-size: 0.95rem;
                padding: 18px 32px;
                border-top: 1px solid #e5e7eb;
            }

            @media (max-width: 600px) {

                .mail-container,
                .brand-header,
                .meta,
                .message-block,
                .footer {
                    padding-left: 12px !important;
                    padding-right: 12px !important;
                }

                .brand-header,
                .meta,
                .message-block,
                .footer {
                    padding-top: 18px !important;
                    padding-bottom: 18px !important;
                }
            }
        </style>
    </head>

    <body>
        <div class="mail-container">
            <div class="brand-header">
                <h1>Új üzenet érkezett</h1>
                <p>Somigumi kapcsolatfelvétel</p>
            </div>
            <div class="meta">
                <div class="row"><strong>Feladó neve:</strong> {{ $name }}</div>
                <div class="row"><strong>Email cím:</strong> <a href="mailto:{{ $email }}"
                        style="color:#2563eb;text-decoration:none;">{{ $email }}</a></div>
                @if ($phone)
                    <div class="row"><strong>Telefonszám:</strong> <a href="tel:{{ $phone }}"
                            style="color:#2563eb;text-decoration:none;">{{ $phone }}</a></div>
                @endif
                <div class="row"><strong>Tárgy:</strong> {{ $subject }}</div>
            </div>
            <div class="message-block">
                <strong>Üzenet:</strong><br>
                <div style="margin-top:10px;white-space:pre-line;">{!! nl2br(e($messageContent)) !!}</div>
            </div>
            <div class="footer">
                <div style="margin-bottom:10px;">
                    <strong>Somigumi Gumi- és Felniáruház</strong><br>
                    Budapest, Nagysándor József u. 65, 1204<br>
                    <a href="tel:06307009668" style="color:#2563eb;text-decoration:none;">06 30 700 9668</a>
                    &nbsp;|&nbsp;
                    <a href="mailto:info@somiautomotive.hu"
                        style="color:#2563eb;text-decoration:none;">info@somiautomotive.hu</a><br>
                    <span style="font-size:0.97em;">Nyitvatartás: H-P 9:00–17:00, Sz-V: Zárva</span>
                </div>
                <div style="margin-bottom:8px;">
                    Ez az üzenet a Somigumi webáruház kapcsolatfelvételi űrlapjából érkezett.
                </div>
                <span style="font-size:0.93em;">Dátum: {{ now()->format('Y. m. d. H:i') }}</span>
            </div>
        </div>
    </body>

</html>
