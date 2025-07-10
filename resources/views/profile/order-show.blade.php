@use('App\Enums\OrderStatus')
<x-layouts.app>
    <div class="min-h-screen bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <!-- Profile Header -->
            <div class="mb-8">
                <div class="flex items-center gap-4">
                    <a href="{{ route('profile.orders') }}"
                        class="inline-flex items-center text-blue-600 hover:text-blue-800">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Vissza a rendelésekhez
                    </a>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 mt-4">Rendelés #{{ $order->id }}</h1>
                <p class="text-gray-600 mt-2">{{ $order->created_at->format('Y-m-d') }}</p>
            </div>

            <!-- Order Details -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <!-- Order Status Header -->
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900">Rendelés státusza</h2>
                        </div>
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                            @if ($order->order_status === OrderStatus::COMPLETED) bg-green-100 text-green-800
                            @elseif($order->order_status === OrderStatus::PROCESSING) bg-yellow-100 text-yellow-800
                            @elseif($order->order_status === OrderStatus::CANCELLED) bg-red-100 text-red-800
                            @else bg-gray-100 text-gray-800 @endif">
                            {{ $order->order_status?->value ?? 'Feldolgozás alatt' }}
                        </span>
                    </div>
                </div>

                <!-- Order Items -->
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Rendelt termékek</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Termék
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Mennyiség
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Egységár
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Összesen
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($order->orderItems as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                @if ($item->product?->main_image)
                                                    <img class="h-12 w-12 rounded-lg object-cover mr-4"
                                                        src="{{ $item->product->main_image }}"
                                                        alt="{{ $item->product->item_name }}">
                                                @endif
                                                <div>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $item->product?->item_name ?? 'Termék törölve' }}
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        {{ $item->product?->sku }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $item->quantity }} db
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ Number::currency($item->total, 'HUF', 'hu', 0) }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ Number::currency($item->total * $item->quantity, 'HUF', 'hu', 0) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Order Summary -->
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Billing & Shipping Info -->
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-3">Számlázási és szállítási adatok</h4>
                                <div class="space-y-2 text-sm">
                                    <div>
                                        <span class="font-medium text-gray-700">Név:</span>
                                        <span class="text-gray-900">{{ $order->billing_name }}</span>
                                    </div>
                                    <div>
                                        <span class="font-medium text-gray-700">Email:</span>
                                        <span class="text-gray-900">{{ $order->billing_email }}</span>
                                    </div>
                                    <div>
                                        <span class="font-medium text-gray-700">Telefon:</span>
                                        <span class="text-gray-900">{{ $order->billing_phone }}</span>
                                    </div>
                                    <div>
                                        <span class="font-medium text-gray-700">Számlázási cím:</span>
                                        <span class="text-gray-900">{{ $order->billing_postcode }}
                                            {{ $order->billing_city }}, {{ $order->billing_address_1 }}</span>
                                    </div>
                                    @if ($order->shipping_address_1)
                                        <div>
                                            <span class="font-medium text-gray-700">Szállítási cím:</span>
                                            <span class="text-gray-900">{{ $order->shipping_postcode }}
                                                {{ $order->shipping_city }}, {{ $order->shipping_address_1 }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Order Total -->
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-3">Összegzés</h4>
                                <div class="space-y-2 text-sm">
                                    <div class="flex justify-between">
                                        <span class="text-gray-700">Termékek összesen:</span>
                                        <span
                                            class="text-gray-900">{{ Number::currency($order->orderTotal(), 'HUF', 'hu', 0) }}
                                        </span>
                                    </div>
                                    @if ($order->shippingMethod)
                                        <div class="flex justify-between">
                                            <span class="text-gray-700">Szállítás
                                                ({{ $order->shippingMethod->name }}):</span>
                                            <span
                                                class="text-gray-900">{{ Number::currency($order->shippingMethod->cost, 'HUF', 'hu', 0) }}
                                            </span>
                                        </div>
                                    @endif
                                    <div class="flex justify-between">
                                        <span class="text-gray-700">Fizetési mód:</span>
                                        <span class="text-gray-900">{{ $order->payment_method_title ?? 'N/A' }}</span>
                                    </div>
                                    <div class="border-t pt-2">
                                        <div class="flex justify-between">
                                            <span class="font-bold text-lg text-gray-900">Végösszeg:</span>
                                            <span class="font-bold text-lg text-green-600">
                                                {{ Number::currency($order->orderTotal() + ($order->shippingMethod?->cost ?? 0), 'HUF', 'hu', 0) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
