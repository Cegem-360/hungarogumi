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
                        <div class="space-y-4">
                            @foreach ($orders as $order)
                                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                                    <div class="flex justify-between items-center">
                                        <div class="flex-1">
                                            <div class="flex items-center justify-between mb-3">
                                                <h3 class="text-lg font-semibold text-gray-900">
                                                    Rendelés #{{ $order->id }}
                                                </h3>
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                                    @if ($order->order_status === OrderStatus::COMPLETED) bg-green-100 text-green-800
                                                    @elseif($order->order_status === OrderStatus::PROCESSING) bg-yellow-100 text-yellow-800
                                                    @elseif($order->order_status === OrderStatus::CANCELLED) bg-red-100 text-red-800
                                                    @else bg-gray-100 text-gray-800 @endif">
                                                    {{ $order->order_status?->value ?? 'Feldolgozás alatt' }}
                                                </span>
                                            </div>

                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center space-x-6">
                                                    <div>
                                                        <p class="text-sm text-gray-600">Dátum</p>
                                                        <p class="font-medium">
                                                            {{ $order->created_at->format('Y. m. d.') }}</p>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm text-gray-600">Végösszeg</p>
                                                        <p class="font-bold text-lg text-green-600">
                                                            {{ number_format($order->orderTotal(), 0, ',', ' ') }} Ft
                                                        </p>
                                                    </div>
                                                </div>
                                                <a href="{{ route('profile.orders.show', $order->id) }}"
                                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                                                    <i class="fas fa-eye mr-2"></i>
                                                    Részletek
                                                </a>
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
