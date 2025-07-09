@use('App\Models\ShippingMethod')
<div class="bg-gray-100 min-h-screen py-8">
    <div class="max-w-5xl mx-auto flex flex-col md:flex-row gap-8">
        <!-- Main Content -->
        <div class="grid grid-cols-2 gap-6">
            <div class="grid grid-cols-1 gap-6">
                <!-- Megrendelő adatai -->
                <div class="bg-white rounded shadow p-6 border-t-4 border-green-500">
                    <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
                        <span
                            class="inline-block w-5 h-5 border-2 border-gray-400 rounded-full flex items-center justify-center mr-2">
                            <span class="bg-gray-400 w-2 h-2 rounded-full"></span>
                        </span>
                        Megrendelő adatai
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium mb-1">E-mail cím <span
                                    class="text-red-500">*</span></label>
                            <input type="email" class="w-full border rounded px-3 py-2" placeholder="E-mail cím"
                                wire:model.live="billingEmail">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Megrendelő típusa <span
                                    class="text-red-500">*</span></label>
                            <select class="w-full border rounded px-3 py-2" wire:model.live="customerType">
                                <option value="private">Magánszemély</option>
                                <option value="company">Cég</option>
                            </select>
                        </div>
                        @if ($customerType === 'company')
                            <div>
                                <label class="block text-sm font-medium mb-1">Cégnév <span
                                        class="text-red-500">*</span></label>
                                <input type="text" class="w-full border rounded px-3 py-2" placeholder="Cégnév"
                                    wire:model.live="billingCompany">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Adószám <span
                                        class="text-red-500">*</span></label>
                                <input type="text" class="w-full border rounded px-3 py-2" placeholder="Adószám"
                                    wire:model.live="billingTaxNumber">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Cég telephely</label>
                                <input type="text" class="w-full border rounded px-3 py-2"
                                    placeholder="Cég telephely" wire:model.live="billingCompanyOffice">
                            </div>
                        @endunless
                        <div>
                            <label class="block text-sm font-medium mb-1">
                                Telefonszám <span class="text-red-500">*</span>
                            </label>
                            <input type="text" class="w-full border rounded px-3 py-2" placeholder="+3630...">
                        </div>
                </div>
            </div>

            <!-- Szállítási módok -->
            <div class="bg-white rounded shadow p-6 border-t-4 border-green-500">
                <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
                    <span
                        class="inline-block w-5 h-5 border-2 border-gray-400 rounded-full flex items-center justify-center mr-2">
                        <span class="bg-gray-400 w-2 h-2 rounded-full"></span>
                    </span>
                    Szállítási módok
                </h2>
                <div class="flex flex-col gap-2 mb-4">
                    @foreach (ShippingMethod::get() ?? [] as $shippingMethod)
                        <label
                            class="flex items-start gap-3 border rounded px-4 py-3 cursor-pointer hover:border-green-500">
                            <input type="radio" name="shippingMethod" wire:model.live="shippingMethod"
                                value="{{ $shippingMethod->id }}" class="mt-1" />
                            <div>
                                <span class="font-semibold">{{ $shippingMethod->name }}</span><br>
                                <span class="text-xs text-gray-500">{{ $shippingMethod->description }}</span>
                            </div>
                            <span class="ml-auto font-semibold">
                                {{ Number::currency($shippingMethod->cost, 'HUF', 'hu', 0) }}
                            </span>
                        </label>
                    @endforeach
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Megjegyzés</label>
                    <textarea wire:model="shippingComment" class="w-full border rounded px-3 py-2 bg-yellow-50" placeholder="Megjegyzés"></textarea>
                </div>
            </div>
            <!-- Fizetési módok -->
            <div class="bg-white rounded shadow p-6 border-t-4 border-green-500">
                <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
                    <span
                        class="inline-block w-5 h-5 border-2 border-gray-400 rounded-full flex items-center justify-center mr-2">
                        <span class="bg-gray-400 w-2 h-2 rounded-full"></span>
                    </span>
                    Fizetési módok
                </h2>
                <div class="flex flex-col gap-2 mb-4">
                    <label
                        class="flex items-start gap-3 border rounded px-4 py-3 cursor-pointer hover:border-green-500">
                        <input type="radio" name="paymentMethod" wire:model.live="paymentMethod"
                            value="bank_transfer" class="mt-1" checked />
                        <div>
                            <span class="font-semibold">Előre utalás</span><br>
                            <span class="text-xs text-gray-500">A rendelés véglegesítése után e-mailben elküldjük a
                                bankszámlaszámot és a további teendőket.</span>
                        </div>
                    </label>
                </div>
            </div>

            <div class="bg-white rounded shadow p-6 border-t-4 border-green-500">
                <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
                    <span
                        class="w-5 h-5 border-2 border-gray-400 rounded-full flex items-center justify-center mr-2">
                        <span class="bg-gray-400 w-2 h-2 rounded-full"></span>
                    </span>
                    Számlázási adatok
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Számlázási név <span
                                class="text-red-500">*</span></label>
                        <input type="text" class="w-full border rounded px-3 py-2" placeholder="Számlázási név"
                            required wire:model.live="billingName">
                    </div>
                    <div class="flex gap-2">
                        <div class="w-24">
                            <label class="block text-sm font-medium mb-1">Ir.szám <span
                                    class="text-red-500">*</span></label>
                            <input type="text" class="w-full border rounded px-3 py-2" placeholder="XXXX"
                                required wire:model.live="billingZip">
                        </div>
                        <div class="flex-1">
                            <label class="block text-sm font-medium mb-1">Település <span
                                    class="text-red-500">*</span></label>
                            <input type="text" class="w-full border rounded px-3 py-2 bg-gray-100"
                                placeholder="Település" required wire:model.live="billingCity">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">Utca/házszám</label>
                        <input type="text" class="w-full border rounded px-3 py-2" placeholder="Utca/házszám"
                            wire:model.live="billingAddress">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Emelet/ajtó</label>
                        <input type="text" class="w-full border rounded px-3 py-2" placeholder="Emelet/ajtó"
                            wire:model.live="billingFloor">
                    </div>
                </div>

            </div>

            <!-- Szállítási adatok megegyeznek a számlázási adatokkal -->
            <div class="bg-white rounded shadow p-6 border-t-4 border-green-500 flex items-center gap-3">
                <input type="checkbox" id="sameAsBilling" wire:model.live="shippingSameAsBilling"
                    class="h-5 w-5 text-green-600 border-gray-300 rounded">
                <label for="sameAsBilling" class="text-sm font-medium select-none cursor-pointer">
                    Szállítási adatok megegyeznek a számlázási adatokkal
                </label>
            </div>

            <!-- Szállítási adatok -->
            <div class="bg-white rounded shadow p-6 border-t-4 border-green-500"
                @if ($shippingSameAsBilling) style="display: none;" @endif>
                <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
                    <span
                        class="w-5 h-5 border-2 border-gray-400 rounded-full flex items-center justify-center mr-2">
                        <span class="bg-gray-400 w-2 h-2 rounded-full"></span>
                    </span>
                    Szállítási adatok
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Szállítási név <span
                                class="text-red-500">*</span></label>
                        <input type="text" class="w-full border rounded px-3 py-2"
                            placeholder="Szállítási név" wire:model.live="shippingName">
                    </div>
                    <div class="flex gap-2">
                        <div class="w-24">
                            <label class="block text-sm font-medium mb-1">Ir.szám <span
                                    class="text-red-500">*</span></label>
                            <input type="text" class="w-full border rounded px-3 py-2" placeholder="XXXX"
                                wire:model.live="shippingZip">
                        </div>
                        <div class="flex-1">
                            <label class="block text-sm font-medium mb-1">Település <span
                                    class="text-red-500">*</span></label>
                            <input type="text" class="w-full border rounded px-3 py-2 bg-gray-100"
                                placeholder="Település" wire:model.live="shippingCity">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Utca/házszám</label>
                        <input type="text" class="w-full border rounded px-3 py-2" placeholder="Utca/házszám"
                            wire:model.live="shippingAddress">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Emelet/ajtó</label>
                        <input type="text" class="w-full border rounded px-3 py-2" placeholder="Emelet/ajtó"
                            wire:model.live="shippingFloor">
                    </div>
                </div>
            </div>

        </div>
        <!-- Számlázási adatok -->

        <!-- Sidebar: Cart Summary -->
        <div class="w-full md:w-80 flex-shrink-0">
            <div class="bg-white rounded shadow p-6">
                <h3 class="font-semibold mb-4 flex items-center gap-2">
                    <span class="inline-block">
                        <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5 inline' fill='none'
                            viewBox='0 0 24 24' stroke='currentColor'>
                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2'
                                d='M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m5-9v9m4-9v9m4-9l2 9' />
                        </svg>
                    </span>
                    Kosár tartalma
                </h3>
                @foreach ($cart->items as $item)
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ $item->product->main_image }}" alt="MSW MSW 78 FS"
                            class="w-16 h-16 object-contain border rounded" />
                        <div class="flex-1">
                            <div class="font-semibold text-sm leading-tight">
                                {{ $item->product->item_name }}<br>{{ $item->product->sku }}
                            </div>
                            <div class="text-xs text-gray-500">Eladási ár:
                                {{ $item->product->getPriceWithCurrency() }} / db<br>Mennyiség:
                                {{ $item->quantity }} db
                            </div>
                            <div class="text-xs font-semibold">Összesen:
                                {{ Number::currency($item->product->getPrice() * $item->quantity, 'HUF', 'hu', 0) }}
                            </div>
                        </div>
                    </div>
                @endforeach

                <hr class="my-4">
                <div class="text-sm mb-2 flex justify-between">
                    <span>Megrendelés értéke</span>
                    <span class="font-semibold">{{ Number::currency($cart->total(), 'HUF', 'hu', 0) }}</span>
                </div>
                <div class="text-sm mb-2 flex justify-between">
                    <span>Szállítás</span>
                    <span class="text-gray-500">A következő lépésben kerül kiszámításra</span>
                </div>
                <div class="text-lg font-bold flex justify-between mt-4">
                    <span>Bruttó végösszeg:</span>
                    <span>{{ Number::currency($cart->total() * 1.27, 'HUF', 'hu', 0) }}</span>
                </div>
                <button wire:click="checkout"
                    class="w-full bg-green-600 hover:bg-green-700 text-white text-lg font-semibold rounded py-3 transition mt-4">
                    Megrendelés véglegesítése
                </button>
            </div>
        </div>
        <!-- END Sidebar: Cart Summary -->
    </div>
</div>

</div>
