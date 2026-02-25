<div class="h-full">
    <div class="group bg-white hover:bg-gray-100 hover:shadow-xl transition-all border border-gray-400 rounded-lg p-4 flex flex-col h-full">
        <a href="{{ route('products.show', $product->id) }}" class="block mb-2">
            <div class="relative">
                <img src="{{ $product->main_image ?? 'https://placehold.co/200' }}"
                    alt="{{ $product->item_name ?? 'Nincs termék név' }}" class="w-full h-40 object-contain mb-2">
                <div class="absolute top-1 right-1 flex flex-col items-center justify-center gap-2">
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
        <div class="text-xs text-gray-500 uppercase tracking-wide mb-1">{{ $product->manufacturer->name ?? '' }}</div>
        <a href="{{ route('products.show', $product->id) }}"
            class="text-sm font-semibold text-gray-900 hover:text-brand-blue line-clamp-2 mb-2">
            {{ $product->item_name ?? 'Nincs termék név' }}
        </a>
        @if ($product->isTyre() && ($product->consumption || $product->grip))
            <div class="text-xs text-gray-500 mb-2">
                {{ $product->consumption ? 'Energiacímke: ' . $product->consumption : '' }}
                {{ $product->consumption && $product->grip ? '|' : '' }}
                {{ $product->grip ? 'Tapadás: ' . $product->grip : '' }}
            </div>
        @endif
        <div class="mt-auto">
            @if ($product->is_external)
                <div class="text-xs text-amber-600 mb-2"><i class="fas fa-truck mr-1"></i>2-4 munkanap</div>
            @endif
            <div class="text-xl font-bold text-brand-blue mb-2">
                {{ (int) $product->net_retail_price ? Number::currency(round((int) $product->net_retail_price * 1.27), 'HUF', 'hu', 0) : 'Nincs ár' }}
            </div>
            @if ($product->all_quantity > 0 && $product->min_order_quantity <= $product->all_quantity)
                <button type="submit" wire:click="addToCart({{ $product->min_order_quantity ?? 1 }})"
                    class="w-full bg-brand-blue text-white py-2 rounded hover:bg-brand-blue/80 flex items-center justify-center gap-1">
                    Kosárba tesz <i class="fas fa-cart-plus"></i>
                </button>
            @else
                <div class="w-full py-2 rounded bg-gray-100 text-gray-500 text-center text-sm">
                    Jelenleg nem elérhető
                </div>
            @endif
        </div>
    </div>
</div>
