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
                                <input type="number" wire:model.live.debounce.500ms="price_min" min="0"
                                    placeholder="min"
                                    class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                                <span class="text-gray-500">-</span>
                                <input type="number" wire:model.live.debounce.500ms="price_max" min="0"
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
                                @php
                                    $siQuery = Product::tyre();
                                    if ($this->manufacturer) {
                                        $siQuery->whereHas(
                                            'manufacturer',
                                            fn($q) => $q->where('name', $this->manufacturer),
                                        );
                                    }
                                    $availableSi = $siQuery->distinct('si')->pluck('si')->filter()->toArray();
                                    $allSpeedIndexes = Product::speedIndexes();
                                @endphp
                                @foreach ($allSpeedIndexes as $symbol => $speed)
                                    @if (in_array($symbol, $availableSi))
                                        <option value="{{ $symbol }}">{{ $symbol }} ({{ $speed }}
                                            km/h)
                                        </option>
                                    @endif
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
                                    $liQuery = Product::tyre();
                                    if ($this->manufacturer) {
                                        $liQuery->whereHas(
                                            'manufacturer',
                                            fn($q) => $q->where('name', $this->manufacturer),
                                        );
                                    }
                                    $liValues = $liQuery->distinct('li')->orderByDesc('li')->pluck('li')->filter();
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
                        {{-- <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Homológizáció</h3>
                            <select id="homologizacio" wire:model.live="rim_dedicated"
                                class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                                <option value="">Összes...</option>
                                @foreach (Product::tyre()->whereNotNull('rim_dedicated')->distinct('rim_dedicated')->pluck('rim_dedicated') as $homologization)
                                    <option value="{{ $homologization }}">{{ $homologization }}</option>
                                @endforeach

                            </select>
                        </div> --}}

                        <!-- Pattern -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Mintázat</h3>
                            <select id="pattern" wire:model.live="pattern_name"
                                class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                                <option value="">Összes...</option>
                                @php
                                    $patternQuery = Product::tyre()->whereNotNull('pattern_name');
                                    if ($this->manufacturer) {
                                        $patternQuery->whereHas(
                                            'manufacturer',
                                            fn($q) => $q->where('name', $this->manufacturer),
                                        );
                                    }
                                @endphp
                                @foreach ($patternQuery->distinct('pattern_name')->pluck('pattern_name') as $pattern)
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
                            @php $availableConsumptions = $this->availableConsumptions; @endphp
                            <div class="space-y-2">
                                @foreach (['A' => 'green-500', 'B' => 'lime-500', 'C' => 'yellow-500', 'D' => 'amber-500', 'E' => 'orange-500', 'F' => 'red-500', 'G' => 'red-600'] as $grade => $color)
                                    @php $available = in_array($grade, $availableConsumptions); @endphp
                                    <label class="rating-item rating-{{ strtolower($grade) }} flex items-center bg-gray-100 p-2 rounded {{ $available ? 'cursor-pointer' : 'opacity-40 cursor-not-allowed' }}">
                                        <input type="checkbox" wire:model.live="consumptions" value="{{ $grade }}"
                                            class="w-4 h-4 text-{{ $color }} rounded focus:ring-brand-blue focus:ring-2 mr-3"
                                            {{ $available ? '' : 'disabled' }}>
                                        <span class="font-medium">{{ $grade }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Wet Grip -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Nedves tapadás</h3>
                            @php $availableGrips = $this->availableGrips; @endphp
                            <div class="space-y-2">
                                @foreach (['A' => 'blue-800', 'B' => 'blue-700', 'C' => 'blue-600', 'D' => 'blue-500', 'E' => 'blue-400', 'F' => 'blue-300', 'G' => 'blue-200'] as $grade => $color)
                                    @php $available = in_array($grade, $availableGrips); @endphp
                                    <label class="rating-item wet-rating-{{ strtolower($grade) }} flex items-center bg-gray-100 p-2 rounded {{ $available ? 'cursor-pointer' : 'opacity-40 cursor-not-allowed' }}">
                                        <input type="checkbox" wire:model.live="grips" value="{{ $grade }}"
                                            class="w-4 h-4 text-{{ $color }} rounded focus:ring-brand-blue focus:ring-2 mr-3"
                                            {{ $available ? '' : 'disabled' }}>
                                        <span class="font-medium">{{ $grade }}</span>
                                    </label>
                                @endforeach
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
        <div>
            <div class="flex items-center justify-between mb-4">
                <div class="text-sm text-gray-600">
                    {{ $this->products()->total() }} termék
                </div>
                <div class="flex items-center gap-2">
                    <label class="text-sm text-gray-600">Rendezés:</label>
                    <select wire:model.live="sortBy"
                        class="bg-gray-100 border border-gray-300 rounded px-3 py-1 text-sm">
                        <option value="availability">Elérhetőség</option>
                        <option value="price_asc">Ár: alacsony elől</option>
                        <option value="price_desc">Ár: magas elől</option>
                    </select>
                </div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($this->products ?? [] as $product)
                    <livewire:product-add-to-cart :productId="$product->id" :key="$product->id" />
                @endforeach
            </div>
        </div>

    </div>
    {{ $this->products()->links() }}
</div>
