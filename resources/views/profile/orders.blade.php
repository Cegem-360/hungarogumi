@use('App\Enums\OrderStatus')
<x-layouts.app>
    <div class="min-h-screen bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <!-- Profile Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Profilom</h1>
                <p class="text-gray-600 mt-2">Üdvözöljük, {{ Auth::user()->name }}!</p>
            </div>

            <!-- Navigation Tabs -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="border-b border-gray-200">
                    <nav class="flex space-x-8 px-6">
                        <a href="{{ route('profile.orders') }}"
                            class="py-4 px-1 border-b-2 border-blue-500 font-medium text-sm text-blue-600">
                            Rendeléseim
                        </a>
                        <a href="{{ route('profile.profile') }}"
                            class="py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300">
                            Adataim
                        </a>
                    </nav>
                </div>

                <!-- Orders Content -->
                <div class="p-6">
                    @if ($orders->count() > 0)
                        <div class="space-y-6">
                            @foreach ($orders as $order)
                                <div class="border border-gray-200 rounded-lg p-6">
                                    <div class="flex justify-between items-start mb-4">
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-900">
                                                Rendelés #{{ $order->id }}
                                            </h3>
                                            <p class="text-sm text-gray-600">
                                                {{ $order->created_at->format('Y. m. d.') }}
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                                @if ($order->order_status === OrderStatus::COMPLETED) bg-green-100 text-green-800
                                                @elseif($order->order_status === OrderStatus::PROCESSING) bg-yellow-100 text-yellow-800
                                                @elseif($order->order_status === OrderStatus::CANCELLED) bg-red-100 text-red-800
                                                @else bg-gray-100 text-gray-800 @endif">
                                                {{ $order->status ?? 'Új' }}
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Order Items -->
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
                                                                @if ($item->product->thumbnail)
                                                                    <img class="h-10 w-10 rounded-lg object-cover mr-4"
                                                                        src="{{ $item->product->thumbnail }}"
                                                                        alt="{{ $item->product->name }}">
                                                                @endif
                                                                <div>
                                                                    <div class="text-sm font-medium text-gray-900">
                                                                        {{ $item->product->item_name }}
                                                                    </div>
                                                                    <div class="text-sm text-gray-500">
                                                                        {{ $item->product->sku }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            {{ $item->quantity }} db
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            {{ number_format($item->total, 0, ',', ' ') }} Ft
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                            {{ number_format($item->total * $item->quantity, 0, ',', ' ') }}
                                                            Ft
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Order Summary -->
                                    <div class="mt-4 pt-4 border-t border-gray-200">
                                        <div class="flex justify-between items-center">
                                            <div class="text-sm text-gray-600">
                                                <p>Szállítási mód: {{ $order->shippingMethod->name ?? 'N/A' }}</p>
                                                <p>Fizetési mód: {{ $order->payment_method_title ?? 'N/A' }}</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-lg font-bold text-gray-900">
                                                    Végösszeg:
                                                    {{ number_format($order->orderItems->sum(fn($item) => $item->total * $item->quantity), 0, ',', ' ') }}
                                                    Ft
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-12">
                            <i class="fas fa-shopping-bag text-gray-400 text-6xl mb-4"></i>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Még nincs rendelése</h3>
                            <p class="text-gray-500 mb-6">Böngéssze termékeinket és tegyen rendelést!</p>
                            <a href="{{ route('home') }}"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                                Termékek böngészése
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
