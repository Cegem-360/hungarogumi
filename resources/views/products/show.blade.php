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
