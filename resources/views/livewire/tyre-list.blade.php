<div>
    @use('App\Models\Product')
    @use('App\Models\Manufacturer')
    <div class="grid md:grid-cols-[1fr_3fr] gap-6 items-start">
        <div class="filter">
            <div class="sticky-sidebar">
                <div class="bg-white rounded-lg shadow-sm">
                    <!-- Search by Auto -->

                    <!-- Warning -->
                    <div class="mb-6 p-4 bg-yellow-50 border border-yellow-200 rounded-md">
                        <div class="flex items-start gap-4">
                            <i class="fas fa-exclamation-triangle text-2xl text-yellow-600"></i>
                            <div class="text-sm">
                                Kérlek válaszd ki a keresendő gumiabroncs <strong>szélesség,</strong>
                                <strong>profil</strong> és
                                <strong>átmérő</strong> méreteit.
                            </div>
                        </div>
                    </div>

                    <!-- Filter Group: Size, Season, Brand, Vehicle Type, Outlet -->
                    <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
                        <!-- Size Selector -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Méret</h3>
                            <div class="grid grid-cols-3 gap-2 items-start">
                                <div>
                                    <label for="width"
                                        class="block text-sm font-medium text-gray-700 mb-1">Szélesség*</label>
                                    <select id="width" name="width" wire:model.live="width"
                                        class="w-full bg-gray-100 border border-gray-300 rounded px-2 py-1 text-center">
                                        <option value="">--</option>
                                        @foreach (Product::tyre()->distinct('width')->orderBy('width')->pluck('width') as $productTyreWidth)
                                            <option value="{{ $productTyreWidth }}"
                                                {{ old('width', request('width')) == $productTyreWidth ? 'selected' : '' }}>
                                                {{ $productTyreWidth }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div>
                                    <label for="aspect_ratio"
                                        class="block text-sm font-medium text-gray-700 mb-1">Profil*</label>
                                    <select id="aspect_ratio" name="aspect_ratio"
                                        class="w-full bg-gray-100 border border-gray-300 rounded px-2 py-1 text-center"
                                        @if (empty($this->width)) disabled @endif
                                        wire:model.live="aspect_ratio">
                                        <option value="">--</option>
                                        @if (!empty($this->width))
                                            @foreach (Product::tyre()->where('width', $this->width)->distinct('aspect_ratio')->orderBy('aspect_ratio')->pluck('aspect_ratio') as $productAspectRatio)
                                                <option value="{{ $productAspectRatio }}"
                                                    {{ old('aspect_ratio') == $productAspectRatio ? 'selected' : '' }}>
                                                    {{ $productAspectRatio }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div>
                                    <label for="atmero"
                                        class="block text-sm font-medium text-gray-700 mb-1">Átmérő*</label>
                                    <select id="atmero" wire:model.live="diameter"
                                        class="w-full bg-gray-100 border border-gray-300 rounded px-2 py-1 text-center"
                                        @if (empty($this->aspect_ratio)) disabled @endif>
                                        <option value="">--</option>
                                        @if (!empty($this->aspect_ratio))
                                            @foreach (Product::tyre()->where('width', $this->width)->where('aspect_ratio', $this->aspect_ratio)->distinct('diameter')->orderBy('diameter')->get(['diameter', 'structure']) ?? [] as $productDiameter)
                                                <option value="{{ $productDiameter->diameter }}"
                                                    {{ old('diameter', request('diameter')) == $productDiameter->diameter ? 'selected' : '' }}>
                                                    {{ $productDiameter->diameter }} <span
                                                        class="text-xs text-gray-500">({{ $productDiameter->structure }})</span>
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Season Filter -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Időjárás</h3>
                            <div class="space-y-2">
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="seasons" value="1"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Nyári gumi</span>
                                </label>
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="seasons" value="2"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Téli gumi</span>
                                </label>
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="seasons" value="3"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Négyévszakos gumi</span>
                                </label>
                            </div>
                        </div>

                        <!-- Brand Filter -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Márka</h3>
                            <select id="marka" wire:model.live="manufacturer"
                                class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                                <option value="">Összes...</option>
                                @foreach (Manufacturer::whereHas('products', function ($q) {
        $q->tyre();
    })->distinct('name')->orderBy('name')->pluck('name') as $manufacturer)
                                    <option value="{{ $manufacturer }}">{{ $manufacturer }}</option>
                                @endforeach

                            </select>
                        </div>

                        <!-- Vehicle Type -->
                        {{-- <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Jármű típus</h3>
                            <select id="tipus" name="tipus"
                                class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                                <option value="">Összes...</option>
                                <option value="szemelygepjarmu-suv">Személygépjármű/SUV</option>
                                <option value="kistehergepjarmu">Kistehergépjármű</option>
                            </select>
                        </div> --}}

                        <!-- Outlet -->
                        {{--  <div class="mb-6">
                            <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                <input type="checkbox" id="outlet" name="outlet" value="outlet"
                                    class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                <span class="text-sm">Outlet termékek</span>
                            </label>
                        </div> --}}
                    </div>

                    <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
                        <!-- Készlet -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Készlet</h3>
                            <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                <input type="checkbox" id="keszlet" name="keszlet" value="keszlet"
                                    class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                <span class="text-sm">min. 4 db azonnal</span>
                            </label>
                        </div>

                        <!-- Price Category -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Árkategória</h3>
                            <div class="space-y-2">
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Budget</span>
                                </label>
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Közepes</span>
                                </label>
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Prémium</span>
                                </label>
                            </div>
                        </div>
                        <!-- Price Filter -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Árszűrő</h3>
                            <div class="flex items-center gap-2">
                                <input type="number" name="min_price" id="min_price" min="0" placeholder="min"
                                    class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                                <span class="text-gray-500">-</span>
                                <input type="number" name="max_price" id="max_price" min="0"
                                    placeholder="max"
                                    class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                                <span class="text-gray-500">Ft</span>
                            </div>
                        </div>
                    </div>

                    <!-- Extra Properties Group -->
                    <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
                        <!-- Extra Properties -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Extra tulajdonságok</h3>
                            <div class="space-y-2">
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="reinforced" id="reinforced"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Erősített</span>
                                </label>
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" id="runflat" wire:model.live="runflat"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Defekttűrő</span>
                                </label>
                                {{--  <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" id="elektromos" name="elektromos" value="elektromos"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Elektromos autóhoz</span>
                                </label> --}}
                            </div>
                        </div>

                        <!-- Speed Index -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Sebességindex</h3>
                            <select wire:model.live="si"
                                class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                                <option value="">Összes...</option>
                                @foreach (Product::speedIndexes() as $symbol => $speed)
                                    <option value="{{ $symbol }}">{{ $symbol }} ({{ $speed }}
                                        km/h)
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <!-- Load Index -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Súlyindex</h3>
                            <select wire:model.live="li"
                                class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                                <option>Összes...</option>

                                @php
                                    $liValues = Product::tyre()
                                        ->distinct('li')
                                        ->orderByDesc('li')
                                        ->pluck('li')
                                        ->filter();
                                    $loadIndexes = collect(Product::loadIndexes());
                                    $commonLi = $liValues->intersect($loadIndexes->keys());
                                @endphp
                                @foreach ($commonLi as $li)
                                    <option value="{{ $li }}">{{ $li }} ({{ $loadIndexes[$li] }}
                                        kg)
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <!-- Noise Level -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Zajszint</h3>
                            <div class="space-y-2">
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" name="zajszint" value="1"
                                        wire:model.live="noise_levels"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">A</span>
                                </label>
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" name="zajszint" value="2"
                                        wire:model.live="noise_levels"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">B</span>
                                </label>
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" name="zajszint" value="3"
                                        wire:model.live="noise_levels"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">C</span>
                                </label>
                            </div>
                        </div>

                        <!-- Homologization -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Homológizáció</h3>
                            <select id="homologizacio" wire:model.live="rim_dedicated"
                                class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                                <option value="">Összes...</option>
                                @foreach (Product::tyre()->whereNotNull('rim_dedicated')->distinct('rim_dedicated')->pluck('rim_dedicated') as $homologization)
                                    <option value="{{ $homologization }}">{{ $homologization }}</option>
                                @endforeach

                            </select>
                        </div>

                        <!-- Pattern -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Mintázat</h3>
                            <select id="pattern" wire:model.live="pattern_name"
                                class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                                <option value="">Összes...</option>
                                @foreach (Product::tyre()->whereNotNull('pattern_name')->distinct('pattern_name')->pluck('pattern_name') as $pattern)
                                    <option value="{{ $pattern }}">{{ $pattern }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Visual Group: Fuel Efficiency & Wet Grip -->
                    <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
                        <!-- Fuel Efficiency -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Fogyasztás</h3>
                            <div class="space-y-2">
                                <label
                                    class="rating-item rating-a flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="consumptions" value="A"
                                        class="w-4 h-4 text-green-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="font-medium">A</span>
                                </label>
                                <label
                                    class="rating-item rating-b flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="consumptions" value="B"
                                        class="w-4 h-4 text-lime-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="font-medium">B</span>
                                </label>
                                <label
                                    class="rating-item rating-c flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="consumptions" value="C"
                                        class="w-4 h-4 text-yellow-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="font-medium">C</span>
                                </label>
                                <label
                                    class="rating-item rating-d flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="consumptions" value="D"
                                        class="w-4 h-4 text-amber-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="font-medium">D</span>
                                </label>
                                <label
                                    class="rating-item rating-e flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="consumptions" value="E"
                                        class="w-4 h-4 text-orange-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="font-medium">E</span>
                                </label>
                                <label
                                    class="rating-item rating-f flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="consumptions" value="F"
                                        class="w-4 h-4 text-red-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="font-medium">F</span>
                                </label>
                                <label
                                    class="rating-item rating-g flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="consumptions" value="G"
                                        class="w-4 h-4 text-red-600 rounded focus:ring-brand-blue focus:ring-2 mr-3 cursor-not-allowed">
                                    <span class="font-medium">G</span>
                                </label>
                            </div>
                        </div>

                        <!-- Wet Grip -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Nedves tapadás</h3>
                            <div class="space-y-2">
                                <label
                                    class="rating-item wet-rating-a flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="grips" value="A"
                                        class="w-4 h-4 text-blue-800 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="font-medium">A</span>
                                </label>
                                <label
                                    class="rating-item wet-rating-b flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="grips" value="B"
                                        class="w-4 h-4 text-blue-700 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="font-medium">B</span>
                                </label>
                                <label
                                    class="rating-item wet-rating-c flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="grips" value="C"
                                        class="w-4 h-4 text-blue-600 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="font-medium">C</span>
                                </label>
                                <label
                                    class="rating-item wet-rating-d flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="grips" value="D"
                                        class="w-4 h-4 text-blue-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="font-medium">D</span>
                                </label>
                                <label
                                    class="rating-item wet-rating-e flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="grips" value="E"
                                        class="w-4 h-4 text-blue-400 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="font-medium">E</span>
                                </label>
                                <label
                                    class="rating-item wet-rating-f flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="grips" value="F"
                                        class="w-4 h-4 text-blue-300 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="font-medium">F</span>
                                </label>
                                <label
                                    class="rating-item wet-rating-g flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="grips" value="G"
                                        class="w-4 h-4 text-blue-200 rounded focus:ring-brand-blue focus:ring-2 mr-3 cursor-not-allowed">
                                    <span class="font-medium">G</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="bg-green-600 text-white p-4 mb-6 rounded-lg">
                        <h3 class="font-semibold mb-2">ÜGYFÉLSZOLGÁLAT</h3>
                        <p class="text-sm mb-2">Hívjon minket, ha megtudásával kapcsolatban kérdése van!</p>
                        <div class="flex items-center text-lg font-bold">
                            <i class="fas fa-phone mr-2"></i>
                            +36 30 700 9668
                        </div>
                    </div>

                    <!-- Opening Hours -->
                    <div class="mt-4 text-sm text-gray-600">
                        <div class="font-semibold mb-2">ELÉRHETŐSÉG</div>
                        <div>Hétfő: 9:00–17:00</div>
                        <div>Kedd: 9:00–17:00</div>
                        <div>Szerda: 9:00–17:00</div>
                        <div>Csütörtök: 9:00–17:00</div>
                        <div>Péntek: 9:00–17:00</div>
                        <div>Szombat: Zárva</div>
                        <div>Vasárnap: Zárva</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Area -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($this->products ?? [] as $product)
                <livewire:product-add-to-cart :productId="$product->id" :key="$product->id" />
            @endforeach
        </div>

    </div>
    {{ $this->products()->links() }}
</div>
