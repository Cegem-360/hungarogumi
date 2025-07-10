<!DOCTYPE html>
<html lang="hu">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Új megrendelés érkezett</title>
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
                background-color: #dc2626;
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
                border-top: 2px solid #dc2626;
            }

            .urgent {
                background-color: #fef2f2;
                border: 1px solid #fecaca;
                padding: 10px;
                border-radius: 5px;
                margin: 15px 0;
            }
        </style>
    </head>

    <body>
        <div class="header">
            <h1>🔔 Új megrendelés érkezett!</h1>
            <p>Megrendelés száma: #{{ $order->id }}</p>
        </div>

        <div class="content">
            <div class="urgent">
                <strong>⚠️ Azonnali figyelmet igényel!</strong><br>
                Új megrendelés érkezett a webshopban: {{ now()->format('Y.m.d H:i') }}
            </div>

            <div class="order-details">
                <h3>Vásárló adatai</h3>
                <p>
                    <strong>Név:</strong> {{ $order->billing_name }}<br>
                    <strong>E-mail:</strong> {{ $order->billing_email }}<br>
                    <strong>Telefon:</strong> {{ $order->billing_phone }}<br>
                    <strong>Vásárló típusa:</strong> {{ $order->customer_type ?? 'Magánszemély' }}
                    @if ($order->billing_company_name)
                        <br><strong>Cégnév:</strong> {{ $order->billing_company_name }}
                    @endif
                    @if ($order->billing_vat_number)
                        <br><strong>Adószám:</strong> {{ $order->billing_vat_number }}
                    @endif
                </p>
            </div>

            <div class="order-details">
                <h3>Megrendelt termékek</h3>

                @if ($order->orderItems)
                    @foreach ($order->orderItems as $item)
                        <div class="order-item">
                            <strong>{{ $item->product->item_name ?? 'Termék' }}</strong><br>
                            <small>SKU: {{ $item->product->sku ?? 'N/A' }}</small><br>
                            Mennyiség: {{ $item->quantity }} db<br>
                            Egységár: {{ Number::currency((int) $item->total, 'HUF', 'hu', 0) }}<br>
                            Összesen:
                            {{ Number::currency((int) $item->total * (int) $item->quantity, 'HUF', 'hu', 0) }}
                        </div>
                    @endforeach

                    <div class="total">
                        Megrendelés végösszege: {{ Number::currency((int) $order->total, 'HUF', 'hu', 0) }} Ft
                    </div>
                @endif
            </div>

            <div class="order-details">
                <h3>Számlázási cím</h3>
                <p>
                    {{ $order->billing_name }}<br>
                    {{ $order->billing_postcode }} {{ $order->billing_city }}<br>
                    {{ $order->billing_address_1 }}
                    @if ($order->billing_address_2)
                        <br>{{ $order->billing_address_2 }}
                    @endif
                </p>
            </div>

            @if ($order->shipping_address_1 && !$order->shipping_same_as_billing)
                <div class="order-details">
                    <h3>Szállítási cím</h3>
                    <p>
                        {{ $order->shipping_postcode }} {{ $order->shipping_city }}<br>
                        {{ $order->shipping_address_1 }}
                        @if ($order->shipping_address_2)
                            <br>{{ $order->shipping_address_2 }}
                        @endif
                    </p>
                </div>
            @endif

            <div class="order-details">
                <h3>Fizetési és szállítási adatok</h3>
                <p>
                    <strong>Fizetési mód:</strong> {{ $order->payment_method_title ?? 'N/A' }}<br>
                    <strong>Szállítási mód:</strong> {{ $order->shippingMethod->name ?? 'N/A' }}<br>
                    <strong>Fizetett:</strong> {{ $order->set_paid ? 'Igen' : 'Nem' }}
                </p>
            </div>

            <div class="urgent">
                <strong>Következő lépések:</strong><br>
                1. Ellenőrizd a készleteket<br>
                2. Vedd fel a kapcsolatot a vásárlóval<br>
                3. Rendezd a szállítást<br>
                4. Frissítsd a megrendelés státuszát az adminban
            </div>
        </div>

        <div class="footer">
            <p>Ez egy automatikusan generált értesítő e-mail a Somigumi webshopból.</p>
            <p>Megrendelés időpontja: {{ $order->created_at->format('Y. m. d. H:i:s') }}</p>
        </div>
    </body>

</html>
