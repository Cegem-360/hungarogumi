<!DOCTYPE html>
<html lang="hu">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Megrendelés visszaigazolás</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                color: #333;
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
            }

            .header {
                background-color: #22c55e;
                color: white;
                padding: 20px;
                text-align: center;
                border-radius: 8px 8px 0 0;
            }

            .content {
                background-color: #f9f9f9;
                padding: 20px;
                border: 1px solid #ddd;
            }

            .order-details {
                background-color: white;
                padding: 15px;
                margin: 15px 0;
                border-radius: 5px;
                border: 1px solid #e0e0e0;
            }

            .footer {
                background-color: #f5f5f5;
                padding: 15px;
                text-align: center;
                border-radius: 0 0 8px 8px;
                font-size: 0.9em;
                color: #666;
            }

            .order-item {
                border-bottom: 1px solid #eee;
                padding: 10px 0;
            }

            .order-item:last-child {
                border-bottom: none;
            }

            .total {
                font-weight: bold;
                font-size: 1.1em;
                margin-top: 15px;
                padding-top: 15px;
                border-top: 2px solid #22c55e;
            }
        </style>
    </head>

    <body>
        <div class="header">
            <h1>Megrendelés visszaigazolás</h1>
            <p>Megrendelés száma: #{{ $order->id }}</p>
        </div>

        <div class="content">
            <h2>Kedves {{ $order->billing_name }}!</h2>

            <p>Köszönjük megrendelését! Az alábbi tételeket rendelte meg tőlünk:</p>

            <div class="order-details">
                <h3>Megrendelés részletei</h3>

                @if ($order->orderItems)
                    @foreach ($order->orderItems as $item)
                        <div class="order-item">
                            <strong>{{ $item->product->item_name ?? 'Termék' }}</strong><br>
                            <small>SKU: {{ $item->product->sku ?? 'N/A' }}</small><br>
                            Mennyiség: {{ $item->quantity }} db<br>
                            Egységár: {{ Number::currency((int) $item->total, 'HUF', 'hu', 0) }}<br>
                            Összesen: {{ Number::currency((int) $item->total * (int) $item->quantity, 'HUF', 'hu', 0) }}
                        </div>
                    @endforeach

                    <div class="total">
                        Végösszeg: {{ Number::currency((int) $order->total, 'HUF', 'hu', 0) }}
                    </div>
                @endif
            </div>

            <div class="order-details">
                <h3>Számlázási adatok</h3>
                <p>
                    <strong>Név:</strong> {{ $order->billing_name }}<br>
                    <strong>E-mail:</strong> {{ $order->billing_email }}<br>
                    <strong>Telefon:</strong> {{ $order->billing_phone }}<br>
                    <strong>Cím:</strong> {{ $order->billing_postcode }} {{ $order->billing_city }},
                    {{ $order->billing_address_1 }}
                    @if ($order->billing_address_2)
                        <br>{{ $order->billing_address_2 }}
                    @endif
                </p>
            </div>

            @if ($order->shipping_address_1 && !$order->shipping_same_as_billing)
                <div class="order-details">
                    <h3>Szállítási adatok</h3>
                    <p>
                        <strong>Cím:</strong> {{ $order->shipping_postcode }} {{ $order->shipping_city }},
                        {{ $order->shipping_address_1 }}
                        @if ($order->shipping_address_2)
                            <br>{{ $order->shipping_address_2 }}
                        @endif
                    </p>
                </div>
            @endif

            <div class="order-details">
                <h3>Fizetési és szállítási információk</h3>
                <p>
                    <strong>Fizetési mód:</strong> {{ $order->payment_method_title ?? 'N/A' }}<br>
                    <strong>Szállítási mód:</strong> {{ $order->shippingMethod->name ?? 'N/A' }}
                </p>
            </div>

            <p>Megrendelését feldolgozzuk és hamarosan felvesszük Önnel a kapcsolatot a további részletekkel
                kapcsolatban.</p>

            <p>Amennyiben kérdése van, kérjük vegye fel velünk a kapcsolatot!</p>
        </div>

        <div class="footer">
            <p>Köszönjük, hogy a Somigumi-t választotta!</p>
            <p><strong>Somigumi Kft.</strong><br>
                E-mail: info@somiautomotive.hu<br>
                Telefon: +36 30 700 9668</p>
        </div>
    </body>

</html>
