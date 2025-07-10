<div class="bg-gray-100 min-h-screen py-6">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-8">
        <div class="flex-1">
            <h2 class="text-4xl font-bold mb-6 text-gray-800">Kosár tartalma</h2>
            @if ($cart->items->isNotEmpty())
                <div class="bg-white rounded-lg shadow-sm p-4">
                    <table class="w-full">
                        <tbody>
                            @foreach ($cart->items as $item)
                                <tr class="border-b last:border-b-0">
                                    <td class="py-4 px-4 w-32 align-middle">
                                        @if ($item->product->main_image)
                                            <img src="{{ $item->product->main_image ?? 'https://placehold.co/200' }}"
                                                alt="{{ $item->product->item_name }}"
                                                class="w-20 h-20 object-contain rounded">
                                        @else
                                            <div class="w-20 h-20 bg-gray-200 flex items-center justify-center rounded">
                                                <i class="fas fa-image text-2xl text-gray-400"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="py-4 px-2 align-middle">
                                        <div class="font-bold text-lg text-gray-800">
                                            <span
                                                class="underline">{{ $item->product->manufacturer->name ?? '' }}</span>
                                            {{ $item->product->item_name }}
                                        </div>
                                        <div class="text-gray-600 text-base mt-1">
                                            {{ $item->product->bolt_count }}x{{ $item->product->pcd }}
                                            {{ $item->product->diameter }}x{{ $item->product->width }}{{ $item->product->structure }}
                                            ET{{ $item->product->et }} {{ $item->product->center_bore }}
                                        </div>
                                    </td>
                                    <td
                                        class="py-4 px-2 align-middle text-xl font-semibold text-gray-800 whitespace-nowrap">
                                        {{ Number::currency(round($item->product->net_retail_price * 1.27), 'HUF', 'hu', 0) }}
                                        /db
                                    </td>
                                    <td class="py-4 px-2 align-middle">
                                        @if ($item->product->isTyre() || $item->product->isSteelWheel() || $item->product->isAlloyWheel())
                                            <select
                                                wire:change="updateQuantity({{ $item['product']->id }}, $event.target.value)"
                                                class="border rounded px-2 py-1">
                                                @for ($i = $item->product->min_order_quantity; $i <= $item->product->all_quantity; $i += $item->product->min_order_quantity)
                                                    <option value="{{ $i }}"
                                                        @if ($item->quantity == $i) selected @endif>
                                                        {{ $i }} db</option>
                                                @endfor
                                            </select>
                                        @else
                                            <input type="number" min="1"
                                                wire:change="updateQuantity({{ $item['product']->id }}, $event.target.value)"
                                                value="{{ $item->quantity }}" class="border rounded px-2 py-1 w-20" />
                                        @endif
                                    </td>
                                    <td
                                        class="py-4 px-2 align-middle text-xl font-bold text-gray-900 whitespace-nowrap">
                                        {{ Number::currency($item->product->net_retail_price * $item->quantity, 'HUF', 'hu', 0) }}

                                    </td>
                                    <td class="py-4 px-2 align-middle text-center">
                                        <button wire:click="removeFromCart({{ $item['product']->id }})"
                                            class="text-gray-700 hover:text-red-600 text-2xl">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="bg-white rounded-lg shadow-sm p-8 flex flex-col items-center">
                    <i class="fas fa-shopping-cart text-6xl text-gray-300 mb-4"></i>
                    <p class="text-lg text-gray-500">A kosarad üres.</p>
                </div>
            @endif
        </div>
        <div class="w-full md:w-96">
            <div class="bg-white rounded-lg shadow-sm p-6 mb-4">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Összesítő</h3>
                <div class="mb-4 border-b pb-4">
                    <div class="flex justify-between text-gray-700 font-semibold mb-2">
                        <span>Megrendelés értéke</span>
                        <span>{{ Number::currency($cart->total(), 'HUF', 'hu', 0) }} </span>
                    </div>
                    <div class="flex justify-between text-gray-600 text-sm">
                        <span>Szállítás</span>
                        <span class="text-right">A következő lépésben<br>kerül kiszámításra</span>
                    </div>
                </div>
                <div class="flex justify-between items-center text-xl font-bold mb-6">
                    <span>Bruttó végösszeg:</span>
                    <span>{{ Number::currency($cart->total(), 'HUF', 'hu', 0) }} </span>
                </div>
                <button wire:click="checkout"
                    class="w-full bg-green-600 hover:bg-green-700 text-white text-lg font-semibold rounded py-3 transition mb-2">Megrendelés
                    folytatása</button>
            </div>
            {{-- <div class="bg-white rounded-lg shadow-sm p-4">
                <button
                    class="w-full flex justify-between items-center text-lg font-semibold text-gray-800 focus:outline-none"
                    type="button">
                    Kupon kód hozzáadása
                    <i class="fas fa-chevron-down"></i>
                </button>
               
            </div> --}}
        </div>
    </div>
</div>
