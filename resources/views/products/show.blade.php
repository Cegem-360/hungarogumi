@use('App\Models\Product')
@use('Illuminate\Support\Number')
<x-layouts.app>
    <x-slot name="title">{{ $product->item_name ?? 'Termék' }}</x-slot>
    <x-slot name="description">{{ $product->description ?? 'Nincs leírás' }}</x-slot>
    <x-slot name="keywords">{{ $product->keywords ?? 'Nincs kulcsszók' }}</x-slot>

    <!-- Breadcrumb -->
    <x-breadcrumb />

    <!-- Main Content -->
    <div class="container mx-auto px-4 space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <!-- Product Image -->
            <div class="lg:col-span-4">
                <div class="bg-white rounded-lg shadow-sm p-6 h-full">
                    <div class="relative">
                        {{--  <button
                            class="absolute top-4 left-4 w-8 h-8 border border-gray-300 rounded flex items-center justify-center hover:bg-gray-50">
                            <i class="far fa-heart text-gray-400"></i>
                        </button> --}}
                        <div
                            class="green-badge text-white px-3 py-1 rounded-full text-xs font-medium absolute top-4 right-4">
                            KÉSZLETEN
                        </div>
                        <img src="{{ $product->main_image ?? 'https://placehold.co/200' }}"
                            alt="{{ $product->item_name ?? 'Nincs termék név' }}"
                            class="w-full h-auto object-contain aspect-square">
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="lg:col-span-8">
                <livewire:add-to-cart-button :product="$product" />
            </div>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <div class="lg:col-span-4 space-y-6">
                <!-- Product Specifications -->
                <x-partials.product-specifications :product="$product" />

                <!-- Product Labels -->
                <x-partials.product-labels :product="$product" />

                <!-- Ügyfélszolgálat -->
                <div class="bg-green-600 text-white p-4 mb-6 rounded-lg">
                    <h3 class="font-semibold mb-2">ÜGYFÉLSZOLGÁLAT</h3>
                    <p class="text-sm mb-2">Hívjon minket, ha a termékkel kapcsolatban kérdése van!</p>
                    <div class="flex items-center text-lg font-bold">
                        <i class="fas fa-phone mr-2"></i>
                        +36 30 700 9668
                    </div>
                    <div class="mt-3 text-sm">
                        <div class="font-semibold mb-1">Nyitvatartás</div>
                        <div>Hétfő - Péntek: 9:00–17:00</div>
                        <div>Szombat - Vasárnap: Zárva</div>
                    </div>
                </div>
            </div>

            <!-- Similar Product List -->
            <div class="lg:col-span-8">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Hasonló termékek</h3>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach (Product::where('item_type_name', $product->item_type_name)->inRandomOrder()->limit(12)->get() ?? [] as $product)
                            <livewire:product-add-to-cart :productId="$product->id" :key="$product->id" />
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

        <!-- Energy Labels -->
        {{-- <div class="mt-8 bg-white rounded-lg shadow-sm p-6">
    <div class="flex items-center justify-center space-x-8">
        <div class="text-center">
            <div class="energy-label w-24 h-32 rounded-lg flex items-center justify-center relative">
                <div class="absolute inset-0 bg-white rounded-lg"></div>
                <div
                    class="absolute top-2 left-2 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-gas-pump text-white text-xs"></i>
                </div>
                <div class="absolute bottom-2 right-2 text-4xl font-bold text-black">E</div>
            </div>
            <div class="text-xs text-gray-500 mt-2">Üzemanyag</div>
        </div>

        <div class="text-center">
            <div class="energy-label w-24 h-32 rounded-lg flex items-center justify-center relative">
                <div class="absolute inset-0 bg-white rounded-lg"></div>
                <div
                    class="absolute top-2 left-2 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-tint text-white text-xs"></i>
                </div>
                <div class="absolute bottom-2 right-2 text-4xl font-bold text-black">E</div>
            </div>
            <div class="text-xs text-gray-500 mt-2">Nedves</div>
        </div>

        <div class="text-center">
            <div class="energy-label w-24 h-32 rounded-lg flex items-center justify-center relative">
                <div class="absolute inset-0 bg-white rounded-lg"></div>
                <div
                    class="absolute top-2 left-2 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-volume-up text-white text-xs"></i>
                </div>
                <div class="absolute bottom-2 right-2 text-2xl font-bold text-black">70dB</div>
            </div>
            <div class="text-xs text-gray-500 mt-2">Zaj</div>
        </div>
    </div>
</div> --}}
        <div class="h-24"></div>
    </div>

</x-layouts.app>
