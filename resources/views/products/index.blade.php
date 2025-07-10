@use('App\Models\Product')
@use('Illuminate\Support\Number')
<x-layouts.app>

    @php
        $products = Product::limit(9)->get() ?? [];
        /* $currentProduct = $products->first(); */
        $currentProduct = $products->skip(5)->first();
    @endphp

    <!-- Breadcrumb -->
    <x-breadcrumb />

    <!-- Main Content -->
    <div class="container mx-auto px-4 space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <!-- Product Image -->
            <div class="lg:col-span-4">
                <div class="bg-white rounded-lg shadow-sm p-6 h-full">
                    <div class="relative">
                        <button
                            class="absolute top-4 left-4 w-8 h-8 border border-gray-300 rounded flex items-center justify-center hover:bg-gray-50">
                            <i class="far fa-heart text-gray-400"></i>
                        </button>
                        <div
                            class="green-badge text-white px-3 py-1 rounded-full text-xs font-medium absolute top-4 right-4">
                            KÉSZLETEN
                        </div>
                        <img src="{{ $currentProduct->main_image ?? 'https://placehold.co/200' }}"
                            alt="{{ $currentProduct->item_name ?? 'Nincs termék név' }}"
                            class="w-full h-auto object-contain aspect-square">
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="lg:col-span-8">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">
                        {{ $currentProduct->manufacturer->name ?? 'Nincs gyártó' }}
                    </h1>
                    <h2 class="text-xl text-gray-700 mb-4">{{ $currentProduct->pattern_name ?? 'Nincs termék név' }}
                    </h2>
                    <p class="text-gray-600 mb-4">{{ $currentProduct->item_name ?? 'Nincs termék név' }}</p>

                    <div class="text-sm text-gray-500 mb-6">
                        {{ $currentProduct->sku ? 'SKU: ' . $currentProduct->sku : 'Nincs SKU' }} |
                        {{ $currentProduct->consumption ? 'Energiacímke: ' . $currentProduct->consumption : 'Nincs energiacímke' }}
                        |
                        {{ $currentProduct->grip ? 'Tapadás nedves úton: ' . $currentProduct->grip : 'Nincs tapadás' }}
                    </div>
                    <div class="text-sm text-gray-500 mb-6">
                        <div class="flex items-center">
                            @if ($currentProduct->season == 1)
                                <i class="fas fa-sun bg-yellow-500 text-white mr-2 p-1 rounded-md text-xl"></i>
                                <span class="">Nyári</span>
                            @elseif ($currentProduct->season == 2)
                                <i class="fas fa-snowflake bg-brand-blue text-white mr-2 p-1 rounded-md text-xl"></i>
                                <span class="">Téli</span>
                            @elseif ($currentProduct->season == 3)
                                <i
                                    class="fa-solid fa-circle-plus bg-brand-anthracite text-white mr-2 p-1 rounded-md text-xl"></i>
                                <span class="">Négyévszakos</span>
                            @else
                                <span class="">Ismeretlen évszak</span>
                            @endif
                        </div>
                    </div>

                    <!-- Price Section -->
                    <div class="border-t pt-6">
                        <div class="flex items-end justify-between mb-4">
                            <div>
                                <div class="text-sm text-gray-500">Bruttó ár (db)</div>
                                @php
                                    $brutto = isset($currentProduct->net_retail_price)
                                        ? round($currentProduct->net_retail_price * 1.27)
                                        : 0;
                                    $brutto_formatted = number_format($brutto, 0, '', ' ') . ' Ft';
                                @endphp
                                <div class="text-3xl font-bold text-gray-900">{{ $brutto_formatted }}</div>
                            </div>
                            <div class="flex items-end gap-6" x-data="{ quantity: 4, price: {{ $brutto }}, get total() { return this.quantity * this.price; } }">
                                <select class="border border-gray-300 rounded px-3 py-2 text-sm"
                                    x-model.number="quantity">
                                    <option value="1">1 db</option>
                                    <option value="2">2 db</option>
                                    <option value="3">3 db</option>
                                    <option value="4">4 db</option>
                                    <option value="5">5 db</option>
                                    <option value="6">6 db</option>
                                    <option value="7">7 db</option>
                                    <option value="8">8 db</option>
                                </select>
                                <div class="min-w-[7rem] text-right">
                                    <div class="text-sm text-gray-500"
                                        x-text="`(${quantity} × {{ number_format($brutto, 0, '', ' ') }} Ft)`"></div>
                                    <div class="text-xl font-bold text-gray-900"
                                        x-text="total.toLocaleString('hu-HU') + ' Ft'"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center text-sm text-green-600 mb-4">
                            <i class="fas fa-check-circle mr-2"></i>
                            <span>Készleten: 4+ darab termék azonnal elvihető</span>
                        </div>

                        <button
                            class="w-full lg:w-1/3 bg-brand-blue hover:bg-brand-blue/80 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Kosárba
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <div class="lg:col-span-4 space-y-6">
                <!-- Product Specifications -->
                <x-partials.product-specifications :product="$currentProduct" />

                <!-- Product Labels -->
                <x-partials.product-labels :product="$currentProduct" />

                <!-- Warning -->
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-md">
                    <div class="flex items-start gap-4">
                        <i class="fa-solid fa-circle-check text-2xl text-green-600"></i>
                        <div class="text-sm">
                            <p class="mb-2"><strong>DOT Garancia</strong></p>
                            <p class="mb-2 text-gray-600">Gumiabroncsaink garantáltan frissen gyártottak! A HTA - Magyar
                                Gumiabroncs Szövetség besorolása alapján maximum 3 évesek lehetnek!</p>
                            <p class="mb-2 text-gray-600">A 3 évnél régebbi gubiabroncsoknál minden esetben az alábbiak
                                szerint
                                jelöljük a gyártási évet: DOT+évjárat (pl. DOT18 = 2018-as abroncs)</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Similar Product List -->
            <div class="lg:col-span-8">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Hasonló termékek</h3>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach (Product::limit(12)->get() ?? [] as $product)
                            <livewire:product-add-to-cart :product_id="$product->id" wire:key="$product->id" />
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
