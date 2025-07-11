<div>
    <div class="group bg-white hover:bg-gray-100 hover:shadow-xl transition-all border border-gray-400 rounded-lg p-4">
        <a href="{{ route('products.show', $product->id) }}"
            class="block text-center mb-2 hover:underline text-brand-blue font-semibold">
            {{ $product->item_name ?? 'Nincs termék név' }}
            <div class="relative">
                <img src="{{ $product->main_image ?? 'https://placehold.co/200' }}"
                    alt="{{ $product->item_name ?? 'Nincs termék név' }}" class="w-full h-40 object-contain mb-4">
                <span
                    class="absolute top-2 left-2 bg-yellow-400 text-black px-2 py-1 rounded text-xs font-bold">AKCIÓ</span>
                <div class="absolute top-1 right-1 flex flex-col items-center justify-center gap-2">
                    {{--  <button
                        class="w-8 h-8 flex items-center justify-center hover:bg-gray-50 border border-gray-300 rounded-md"
                        title="Kedvencekhez adom">
                        <i class="far fa-heart text-gray-400"></i>
                    </button> --}}
                    @if ($product->season == 1)
                        <div class="w-8 h-8 flex items-center justify-center bg-yellow-500 text-white p-1 rounded-md text-2xl"
                            title="Nyári">
                            <i class="fas fa-sun"></i>
                        </div>
                    @elseif ($product->season == 2)
                        <div class="w-8 h-8 flex items-center justify-center bg-brand-blue text-white p-1 rounded-md text-2xl"
                            title="Téli">
                            <i class="fas fa-snowflake"></i>
                        </div>
                    @elseif ($product->season == 3)
                        <div class="w-8 h-8 flex items-center justify-center bg-brand-anthracite text-white p-1 rounded-md text-2xl"
                            title="Négyévszakos">
                            <i class="fa-solid fa-circle-plus"></i>
                        </div>
                    @endif
                </div>
            </div>
        </a>
        <div class="text-sm font-medium mb-2">{{ $product->manufacturer->name ?? 'Nincs gyártó' }}
            {{ $product->item_name ?? 'Nincs' }}</div>
        <div class="text-xl font-bold text-brand-blue mb-2">
            {{ (int) $product->net_retail_price ? Number::currency((int) $product->net_retail_price, 'HUF', 'hu', 0) : 'Nincs ár' }}
        </div>
        <div class="text-xs text-gray-500 mb-3">
            {{ $product->consumption ? 'Energiacímke: ' . $product->consumption : 'Nincs energiacímke' }} |
            {{ $product->grip ? 'Tapadás nedves úton: ' . $product->grip : 'Nincs tapadás' }}</div>
        @if ($product->all_quantity > 0 && $product->min_order_quantity <= $product->all_quantity)
            <button type="submit" wire:click="addToCart({{ $product->min_order_quantity ?? 1 }})"
                class="w-full bg-brand-blue text-white py-2 rounded hover:bg-brand-blue/80 flex items-center justify-center gap-1">
                Kosárba tesz <i class="fas fa-cart-plus"></i>
            </button>
        @else
            <p>
                Jelenleg nem elérhető
            </p>
        @endif

    </div>

</div>
