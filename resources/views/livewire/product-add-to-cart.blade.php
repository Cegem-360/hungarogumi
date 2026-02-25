<div>
    <div class="group bg-white hover:shadow-lg transition-all border border-gray-200 rounded-lg overflow-hidden flex flex-col h-full">
        <!-- Kép -->
        <a href="{{ route('products.show', $product->id) }}" class="block relative">
            <img src="{{ $product->main_image ?? 'https://placehold.co/300x200' }}"
                alt="{{ $product->item_name ?? 'Nincs termék név' }}"
                class="w-full h-48 object-contain p-4 bg-white group-hover:scale-105 transition-transform">
            @if ($product->season == 1)
                <span class="absolute top-2 right-2 w-8 h-8 flex items-center justify-center bg-yellow-500 text-white rounded-md" title="Nyári">
                    <i class="fas fa-sun text-sm"></i>
                </span>
            @elseif ($product->season == 2)
                <span class="absolute top-2 right-2 w-8 h-8 flex items-center justify-center bg-brand-blue text-white rounded-md" title="Téli">
                    <i class="fas fa-snowflake text-sm"></i>
                </span>
            @elseif ($product->season == 3)
                <span class="absolute top-2 right-2 w-8 h-8 flex items-center justify-center bg-brand-anthracite text-white rounded-md" title="Négyévszakos">
                    <i class="fa-solid fa-circle-plus text-sm"></i>
                </span>
            @endif
        </a>

        <!-- Tartalom -->
        <div class="p-4 flex flex-col flex-1">
            <!-- Gyártó -->
            <div class="text-xs text-gray-500 uppercase tracking-wide mb-1">
                {{ $product->manufacturer->name ?? 'Ismeretlen gyártó' }}
            </div>

            <!-- Terméknév -->
            <a href="{{ route('products.show', $product->id) }}"
                class="text-sm font-semibold text-gray-900 hover:text-brand-blue transition-colors line-clamp-2 mb-3">
                {{ $product->item_name ?? 'Nincs termék név' }}
            </a>

            <!-- Energiacímke (csak guminál) -->
            @if ($product->isTyre() && ($product->consumption || $product->grip))
                <div class="flex items-center gap-2 text-xs text-gray-500 mb-3">
                    @if ($product->consumption)
                        <span title="Energiacímke"><i class="fas fa-gas-pump mr-0.5"></i>{{ $product->consumption }}</span>
                    @endif
                    @if ($product->grip)
                        <span title="Tapadás nedves úton"><i class="fas fa-droplet mr-0.5"></i>{{ $product->grip }}</span>
                    @endif
                </div>
            @endif

            <!-- Spacer -->
            <div class="mt-auto"></div>

            <!-- Szállítás -->
            @if ($product->is_external)
                <div class="text-xs text-amber-600 mb-2">
                    <i class="fas fa-truck mr-1"></i>2-4 munkanap
                </div>
            @endif

            <!-- Ár -->
            <div class="text-xl font-bold text-brand-blue mb-3">
                {{ (int) $product->net_retail_price ? Number::currency(round((int) $product->net_retail_price * 1.27), 'HUF', 'hu', 0) : 'Nincs ár' }}
            </div>

            <!-- Kosár gomb -->
            @if ($product->all_quantity > 0 && $product->min_order_quantity <= $product->all_quantity)
                <button type="submit" wire:click="addToCart({{ $product->min_order_quantity ?? 1 }})"
                    class="w-full bg-brand-blue text-white py-2.5 rounded-lg hover:bg-brand-blue/80 transition-colors flex items-center justify-center gap-2 font-medium text-sm">
                    <i class="fas fa-cart-plus"></i> Kosárba tesz
                </button>
            @else
                <div class="w-full py-2.5 rounded-lg bg-gray-100 text-gray-500 text-center text-sm font-medium">
                    Jelenleg nem elérhető
                </div>
            @endif
        </div>
    </div>
</div>
