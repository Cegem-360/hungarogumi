<div class="">
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">
            {{ $product->item_name ?? 'Nincs termék név' }}
        </h1>
        <h2 class="text-xl text-gray-700 mb-4">Gyártó: {{ $product->manufacturer->name ?? 'Nincs gyártó' }}
        </h2>
        <p class="text-gray-600 mb-4"> {{ $product->pattern_name ?? '' }}</p>

        <div class="text-sm text-gray-500 mb-6">
            {{ $product->sku ? 'SKU: ' . $product->sku : 'Nincs SKU' }}
            {{ $product->consumption ? '|' . 'Energiacímke: ' . $product->consumption : '' }}
            {{ $product->grip ? '|' . 'Tapadás nedves úton: ' . $product->grip : '' }}
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
                    <i class="fa-solid fa-circle-plus bg-brand-anthracite text-white mr-2 p-1 rounded-md text-xl"></i>
                    <span class="">Négyévszakos</span>
                @else
                    <span class=""></span>
                @endif
            </div>
        </div>

        <!-- Price Section -->
        <div class="border-t pt-6">
            <div class="flex items-end justify-between mb-4">
                <div>
                    <div class="text-sm text-gray-500">Bruttó ár (db)</div>
                    <div class="text-3xl font-bold text-gray-900">
                        {{ Number::currency($currentProduct->net_retail_price * 1.27, 'HUF', 'hu', 0) }}</div>
                </div>
                <div class="flex items-end gap-6">
                    @if ($product->all_quantity >= 0 && $product->min_order_quantity <= $product->all_quantity)
                        <select class="border border-gray-300 rounded px-3 py-2 text-sm" wire:model.live="quantity">
                            @php
                                $maxQty = $product->all_quantity ?? 8;
                                $minQty = $product->min_order_quantity ?? 1;
                            @endphp
                            @for ($i = $minQty; $i <= $maxQty; $i += $minQty)
                                <option value="{{ $i }}">{{ $i }} db</option>
                            @endfor
                        </select>
                    @endif
                    <div class="min-w-[7rem] text-right">
                        <div class="text-sm text-gray-500">
                            ({{ $quantity }} × {{ Number::currency($this->brutto, 'HUF', 'hu', 0) }})
                        </div>
                        <div class="text-xl font-bold text-gray-900">
                            {{ Number::currency($quantity * $this->brutto, 'HUF', 'hu', 0) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center text-sm text-green-600 mb-4">
                <i class="fas fa-check-circle mr-2"></i>

                @if ($product->all_quantity >= 0 && $product->min_order_quantity <= $product->all_quantity)
                    @if ($product->all_quantity >= 5)
                        <span>Készleten: 4+ darab termék azonnal elvihető</span>
                    @else
                        <span>Készleten: {{ $product->all_quantity }} darab termék azonnal
                            elvihető</span>
                    @endif
                @else
                    <span>Rendelhető</span>
                @endif
            </div>

            @if ($product->all_quantity >= 0 && $product->min_order_quantity <= $product->all_quantity)
                <button type="button" wire:click="addToCart" wire:loading.attr="disabled"
                    class="w-full lg:w-1/3 bg-brand-blue hover:bg-brand-blue/80 text-white font-medium py-3 px-6 rounded-lg transition-colors disabled:opacity-50 disabled:cursor-not-allowed">

                    <span wire:loading.remove>
                        <i class="fas fa-cart-plus"></i> Kosárba
                    </span>

                    <span wire:loading>
                        <i class="fas fa-spinner fa-spin"></i> Hozzáadás...
                    </span>
                </button>
            @endif
        </div>
    </div>
</div>
