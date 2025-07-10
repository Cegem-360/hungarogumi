@use('App\Enums\OrderStatus')
<x-layouts.app>
    <div
        class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-green-200 via-green-100 to-white py-12 px-4">
        <div class="bg-white rounded-3xl shadow-2xl p-10 max-w-lg w-full text-center animate-fade-in mb-8">
            <div class="flex justify-center mb-6">
                <svg class="w-20 h-20 text-green-500 animate-bounce" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="22" stroke="currentColor" stroke-width="4" fill="#d1fae5" />
                    <path d="M16 24l6 6 10-12" stroke="#22c55e" stroke-width="4" stroke-linecap="round"
                        stroke-linejoin="round" fill="none" />
                </svg>
            </div>
            <h1 class="text-3xl font-extrabold text-green-700 mb-4">Sikeres vásárlás!</h1>
            <p class="text-gray-600 mb-6">Köszönjük, hogy nálunk vásároltál.<br>Rendelésed feldolgozás alatt van.</p>
            <a href="{{ route('home') }}"
                class="inline-block px-6 py-3 bg-green-500 text-white rounded-full font-semibold shadow-lg hover:bg-green-600 transition">Vissza
                a főoldalra</a>
        </div>

        @if (isset($order) && $order)
            <div class="bg-white rounded-2xl shadow-lg max-w-2xl w-full p-8 animate-fade-in">
                <h2 class="text-xl font-bold text-gray-800 mb-4 text-left">Rendelés összefoglaló</h2>
                <div class="mb-6 text-left">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2">
                        <div>
                            <span class="font-semibold text-gray-700">Rendelésszám:</span>
                            <span class="text-gray-900">#{{ $order->id }}</span>
                        </div>
                        <div>
                            <span class="font-semibold text-gray-700">Dátum:</span>
                            <span class="text-gray-900">{{ $order->created_at?->format('Y.m.d H:i') }}</span>
                        </div>
                    </div>
                    <div>
                        <span class="font-semibold text-gray-700">Státusz:</span>
                        <span
                            class="inline-block px-2 py-1 rounded-full text-xs font-semibold
                            @if ($order->order_status === OrderStatus::SUCCESS) bg-green-100 text-green-700
                            @elseif($order->order_status === OrderStatus::PROCESSING) bg-yellow-100 text-yellow-700
                            @elseif($order->order_status === OrderStatus::CANCELLED) bg-red-100 text-red-700
                            @else bg-gray-100 text-gray-700 @endif">
                            {{ __($order->order_status->value ?? 'Feldolgozás alatt') }}
                        </span>
                    </div>
                </div>

                <div class="overflow-x-auto mb-6">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Termék</th>
                                <th
                                    class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Mennyiség</th>
                                <th
                                    class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Egységár</th>
                                <th
                                    class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Összesen</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($order->orderItems as $item)
                                <tr>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center gap-2">
                                            @if ($item->product?->main_image)
                                                <img src="{{ $item->product->main_image }}"
                                                    alt="{{ $item->product->item_name }}"
                                                    class="h-10 w-10 rounded object-cover">
                                            @endif
                                            <div>
                                                <div class="font-medium text-gray-900">
                                                    {{ $item->product?->item_name ?? '-' }}</div>
                                                <div class="text-xs text-gray-500">{{ $item->product?->sku }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-gray-900">{{ $item->quantity }} db</td>
                                    <td class="px-4 py-3 text-gray-900">
                                        {{ Number::currency($item->total, 'HUF', 'hu', 0) }}</td>
                                    <td class="px-4 py-3 font-semibold text-gray-900">
                                        {{ Number::currency($item->total * $item->quantity, 'HUF', 'hu', 0) }} Ft</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 border-t pt-4">
                    <div class="text-sm text-gray-700">
                        <div><span class="font-semibold">Szállítási mód:</span>
                            {{ $order->shippingMethod->name ?? '-' }}</div>
                        <div><span class="font-semibold">Fizetési mód:</span> {{ $order->payment_method_title ?? '-' }}
                        </div>
                        <div><span class="font-semibold">Szállítási cím:</span> {{ $order->shipping_postcode }}
                            {{ $order->shipping_city }}, {{ $order->shipping_address_1 }}</div>
                        <div><span class="font-semibold">Vevő:</span> {{ $order->billing_name }}</div>
                        <div><span class="font-semibold">Email:</span> {{ $order->billing_email }}</div>
                    </div>
                    <div class="text-right">
                        <div class="text-lg font-bold text-gray-900 mb-1">Végösszeg:</div>
                        <div class="text-2xl font-extrabold text-green-700">
                            {{ Number::currency($order->orderTotal(), 'HUF', 'hu', 0) }}</div>
                        @if ($order->shippingMethod?->cost)
                            <div class="text-sm text-gray-600">+ Szállítás:
                                {{ Number::currency($order->shippingMethod->cost, 'HUF', 'hu', 0) }}</div>
                        @endif
                    </div>
                </div>
            </div>
        @endif

        <style>
            @keyframes fade-in {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fade-in {
                animation: fade-in 0.8s cubic-bezier(.4, 0, .2, 1) both;
            }
        </style>
</x-layouts.app>
