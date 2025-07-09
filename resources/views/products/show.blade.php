@use('App\Models\Product')
@use('Illuminate\Support\Number')
<x-layouts.app>
    <x-slot name="title">{{ $product->item_name ?? 'Termék' }}</x-slot>
    <x-slot name="description">{{ $product->description ?? 'Nincs leírás' }}</x-slot>
    <x-slot name="keywords">{{ $product->keywords ?? 'Nincs kulcsszók' }}</x-slot>

    <!-- Breadcrumb -->
    <div class="container mx-auto px-4 py-3">
        <nav class="flex text-sm text-gray-500">
            <a href="{{ route('home') }}" class="hover:text-gray-700">hungarogumi.hu</a>
            <span class="mx-2">›</span>
            @if ($product->type === 'tyre')
                <a href="{{ route('tyres') }}" class="hover:text-gray-700">Gumiabroncs</a>
            @elseif ($product->type === 'wheel')
                <a href="{{ route('wheels') }}" class="hover:text-gray-700">Felni</a>
            @else
                <a href="{{ route('home') }}" class="hover:text-gray-700">Főoldal</a>
            @endif
            <span class="mx-2">›</span>
            <a href="#" class="hover:text-gray-700">205/55 R16</a>
            <span class="mx-2">›</span>
            <a href="#" class="hover:text-gray-700">Téli gumi</a>
            <span class="mx-2">›</span>
            <span class="text-gray-700">Kelly 205/55 R16 91H DOT22 FR HP</span>
        </nav>
    </div>

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
                        <img src="{{ $product->main_image ?? 'https://placehold.co/200' }}"
                            alt="{{ $product->item_name ?? 'Nincs termék név' }}"
                            class="w-full h-auto object-contain aspect-square">
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="lg:col-span-8">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">
                        {{ $product->manufacturer->name ?? 'Nincs gyártó' }}
                    </h1>
                    <h2 class="text-xl text-gray-700 mb-4">{{ $product->pattern_name ?? 'Nincs termék név' }}
                    </h2>
                    <p class="text-gray-600 mb-4">{{ $product->item_name ?? 'Nincs termék név' }}</p>

                    <div class="text-sm text-gray-500 mb-6">
                        {{ $product->sku ? 'SKU: ' . $product->sku : 'Nincs SKU' }} |
                        {{ $product->consumption ? 'Energiacímke: ' . $product->consumption : 'Nincs energiacímke' }}
                        |
                        {{ $product->grip ? 'Tapadás nedves úton: ' . $product->grip : 'Nincs tapadás' }}
                    </div>
                    <div class="text-sm text-gray-500 mb-6">
                        <div class="flex items-center">
                            @if ($product->season == 1)
                                <i class="fas fa-sun bg-yellow-500 text-white mr-2 p-1 rounded-md text-xl"></i>
                                <span class="">Nyári</span>
                            @elseif ($product->season == 2)
                                <i class="fas fa-snowflake bg-brand-blue text-white mr-2 p-1 rounded-md text-xl"></i>
                                <span class="">Téli</span>
                            @elseif ($product->season == 3)
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
                                    $brutto = isset($product->net_retail_price)
                                        ? round($product->net_retail_price * 1.27)
                                        : 0;
                                @endphp
                                <div class="text-3xl font-bold text-gray-900">
                                    {{ Number::currency($brutto, 'HUF', 'hu', 0) }}</div>
                            </div>
                            <div class="flex items-end gap-6" x-data="{ quantity: 4, price: {{ $brutto }}, get total() { return this.quantity * this.price; } }">
                                <select class="border border-gray-300 rounded px-3 py-2 text-sm"
                                    x-model.number="quantity">
                                    @php
                                        $maxQty = $product->all_quantity ?? 8;
                                        $minQty = $product->min_order_quantity ?? 1;
                                    @endphp
                                    @for ($i = $minQty; $i <= $maxQty; $i++)
                                        <option value="{{ $i }}">{{ $i }} db</option>
                                    @endfor
                                </select>
                                <div class="min-w-[7rem] text-right">
                                    <div class="text-sm text-gray-500"
                                        x-text="`(${quantity} × {{ Number::currency($brutto, 'HUF', 'hu', 0) }})`">
                                    </div>
                                    <div class="text-xl font-bold text-gray-900"
                                        x-text="total.toLocaleString('hu-HU') + ' Ft'"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center text-sm text-green-600 mb-4">
                            <i class="fas fa-check-circle mr-2"></i>
                            @if ($product->all_quantity >= 5)
                                <span>Készleten: 4+ darab termék azonnal elvihető</span>
                            @elseif ($product->all_quantity > 0 && $product->all_quantity <= 4)
                                <span>Készleten: {{ $product->all_quantity }} darab termék azonnal
                                    elvihető</span>
                            @else
                                <span>Rendelhető</span>
                            @endif
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
                <x-partials.product-specifications :product="$product" />

                <!-- Product Labels -->
                <x-partials.product-labels :product="$product" />

                <!-- Warning -->
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-md">
                    <div class="flex items-start gap-4">
                        <i class="fa-solid fa-circle-check text-2xl text-green-600"></i>
                        <div class="text-sm">
                            <p class="mb-2"><strong>DOT Garancia</strong></p>
                            <p class="mb-2 text-gray-600">Gumiabroncsaink garantáltan frissen gyártottak! A HTA -
                                Magyar
                                Gumiabroncs Szövetség besorolása alapján maximum 3 évesek lehetnek!</p>
                            <p class="mb-2 text-gray-600">A 3 évnél régebbi gubiabroncsoknál minden esetben az
                                alábbiak
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
