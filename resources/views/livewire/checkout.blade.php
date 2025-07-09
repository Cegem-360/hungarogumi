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
                            <input type="email" class="w-full border rounded px-3 py-2" placeholder="E-mail cím">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Megrendelő típusa <span
                                    class="text-red-500">*</span></label>
                            <select class="w-full border rounded px-3 py-2">
                                <option>Magánszemély</option>
                                <option>Cég</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Telefonszám <span
                                    class="text-red-500">*</span></label>
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
                        <label
                            class="flex items-start gap-3 border rounded px-4 py-3 cursor-pointer hover:border-green-500">
                            <input type="radio" name="shipping" class="mt-1" />
                            <div>
                                <span class="font-semibold">Személyes átvétel</span><br>
                                <span class="text-xs text-gray-500">1158 Bp. Késmárk u. 9. II. kapu</span>
                            </div>
                            <span class="ml-auto font-semibold">0 Ft</span>
                        </label>
                        <label
                            class="flex items-start gap-3 border rounded px-4 py-3 cursor-pointer hover:border-green-500">
                            <input type="radio" name="shipping" class="mt-1" />
                            <div>
                                <span class="font-semibold">Személyes átvétel</span><br>
                                <span class="text-xs text-gray-500">1154 Bp. Szentmihályi u. 100.</span>
                            </div>
                            <span class="ml-auto font-semibold">0 Ft</span>
                        </label>
                        <label
                            class="flex items-start gap-3 border rounded px-4 py-3 cursor-pointer hover:border-green-500">
                            <input type="radio" name="shipping" class="mt-1" />
                            <div>
                                <span class="font-semibold">Házhozszállítás vidékre</span><br>
                                <span class="text-xs text-gray-500">A kiszállítást futárszolgálat végzi</span>
                            </div>
                            <span class="ml-auto font-semibold">+ 6 360 Ft</span>
                        </label>
                        <label
                            class="flex items-start gap-3 border rounded px-4 py-3 cursor-pointer hover:border-green-500">
                            <input type="radio" name="shipping" class="mt-1" />
                            <div>
                                <span class="font-semibold">Házhozszállítás Budapesten belül</span><br>
                                <span class="text-xs text-gray-500">A kiszállítást a Hungarogumi végzi. A szállítási díj
                                    címenként értendő.</span>
                            </div>
                            <span class="ml-auto font-semibold">+ 2 990 Ft</span>
                        </label>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Megjegyzés</label>
                        <textarea class="w-full border rounded px-3 py-2 bg-yellow-50" placeholder="Megjegyzés"></textarea>
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
                            <input type="text" class="w-full border rounded px-3 py-2" placeholder="Számlázási név">
                        </div>
                        <div class="flex gap-2">
                            <div class="w-24">
                                <label class="block text-sm font-medium mb-1">Ir.szám <span
                                        class="text-red-500">*</span></label>
                                <input type="text" class="w-full border rounded px-3 py-2" placeholder="XXXX">
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-medium mb-1">Település <span
                                        class="text-red-500">*</span></label>
                                <input type="text" class="w-full border rounded px-3 py-2 bg-gray-100"
                                    placeholder="Település">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1">Utca/házszám</label>
                            <input type="text" class="w-full border rounded px-3 py-2" placeholder="Utca/házszám">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Emelet/ajtó</label>
                            <input type="text" class="w-full border rounded px-3 py-2" placeholder="Emelet/ajtó">
                        </div>
                    </div>

                </div>
            </div>
            <!-- Számlázási adatok -->

            <!-- Sidebar: Cart Summary -->
            <div class="w-full md:w-80 flex-shrink-0">
                <div class="bg-white rounded shadow p-6">
                    <h3 class="font-semibold mb-4 flex items-center gap-2">
                        <span class="inline-block"><svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5 inline'
                                fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2'
                                    d='M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m5-9v9m4-9v9m4-9l2 9' />
                            </svg></span>
                        Kosár tartalma
                    </h3>
                    @foreach ($cart->items as $item)
                        <div class="flex items-center gap-3 mb-4">
                            <img src="{{ $item->product->main_image }}" alt="MSW MSW 78 FS"
                                class="w-16 h-16 object-contain border rounded" />
                            <div class="flex-1">
                                <div class="font-semibold text-sm leading-tight">MSW MSW 78 FS<br>5X112 17x6.5 ET49
                                    66.6
                                </div>
                                <div class="text-xs text-gray-500">Eladási ár: 39 990 Ft<br>Mennyiség: 4 db</div>
                                <div class="text-xs font-semibold">Összesen: 159 960 Ft</div>
                            </div>
                        </div>
                    @endforeach

                    <hr class="my-4">
                    <div class="text-sm mb-2 flex justify-between">
                        <span>Megrendelés értéke</span>
                        <span class="font-semibold">159 960 Ft</span>
                    </div>
                    <div class="text-sm mb-2 flex justify-between">
                        <span>Szállítás</span>
                        <span class="text-gray-500">A következő lépésben kerül kiszámításra</span>
                    </div>
                    <div class="text-lg font-bold flex justify-between mt-4">
                        <span>Bruttó végösszeg:</span>
                        <span>159 960 Ft</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
