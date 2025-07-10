@use('App\Models\Product')
@use('App\Models\Manufacturer')
<div>
    <div class="grid md:grid-cols-[1fr_3fr] gap-6 items-start">
        <div class="filter">
            <div class="sticky-sidebar">
                <div class="bg-white rounded-lg shadow-sm">

                    <!-- Warning -->
                    <div class="mb-6 p-4 bg-yellow-50 border border-yellow-200 rounded-md">
                        <div class="flex items-start gap-4">
                            <i class="fas fa-exclamation-triangle text-2xl text-yellow-600"></i>
                            <div class="text-sm">
                                Kérlek válaszd ki a keresendő alufelni <strong>lyukszám,</strong>
                                <strong>osztókor</strong> és
                                <strong>coll</strong> számát.
                            </div>
                        </div>
                    </div>

                    <!-- Filter Group: Wheel Specifications -->
                    <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
                        <!-- Size Selector -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Méret</h3>
                            <div class="grid grid-cols-3 gap-2 items-start">
                                <div>
                                    <label for="bolt_count"
                                        class="block text-sm font-medium text-gray-700 mb-1">Lyukszám*</label>
                                    <select id="bolt_count" wire:model.live="bolt_count"
                                        class="w-full bg-gray-100 border border-gray-300 rounded px-2 py-1 text-center">
                                        <option value="">--</option>
                                        @foreach (Product::wheel()->distinct('bolt_count')->orderBy('bolt_count')->pluck('bolt_count') as $wheelColt)
                                            <option value="{{ $wheelColt }}">{{ $wheelColt }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="pcd"
                                        class="block text-sm font-medium text-gray-700 mb-1">Átmérő*</label>
                                    <select id="pcd" name="pcd" wire:model.live="pcd"
                                        class="w-full bg-gray-100 border border-gray-300 rounded px-2 py-1 text-center">
                                        <option value="">--</option>
                                        @foreach (Product::wheel()->distinct('pcd')->orderBy('pcd')->pluck('pcd') as $wheelPcd)
                                            <option value="{{ $wheelPcd }}">{{ $wheelPcd }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="diameter"
                                        class="block text-sm font-medium text-gray-700 mb-1">Osztókor*</label>
                                    <select id="diameter" name="diameter" wire:model.live="diameter"
                                        class="w-full bg-gray-100 border border-gray-300 rounded px-2 py-1 text-center">
                                        <option value="">--</option>
                                        @foreach (Product::wheel()->orderBy('diameter')->pluck('diameter')->unique() as $wheelDiameter)
                                            <option value="{{ $wheelDiameter }}">{{ $wheelDiameter }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-3 mt-4" wire:ignore>
                                    <label class="text-sm font-semibold mb-2 block">Szélesség</label>
                                    <input type="text" id="wheel-width-slider" class="wheel-width-slider"
                                        name="wheel_width_range" value="" />
                                    <input type="hidden" id="widthMin" name="width_min"
                                        value="{{ Product::wheel()->min('width') }}" wire:model.live="width_min" />
                                    <input type="hidden" id="widthMax" name="width_max"
                                        value="{{ Product::wheel()->max('width') }}" wire:model.live="width_max" />
                                </div>
                            </div>
                        </div>

                        <!-- Wheel Type -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Felni típus</h3>
                            <div class="space-y-2">
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="wheel_type" value="alufelni"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Alufelni</span>
                                </label>
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="wheel_type" value="lemezfelni"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Lemezfelni</span>
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
        $q->wheel();
    })->distinct('name')->orderBy('name')->get() as $manufacturer)
                                    <option value="{{ $manufacturer->name }}">{{ $manufacturer->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Model -->
                        {{--  <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Modell</h3>
                            <input type="text" wire:model.live="wheel_model" placeholder="Keresés modell szerint..."
                                class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                        </div> --}}

                        <!-- Outlet -->
                        {{-- <div class="mb-6">
                            <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                <input type="checkbox" wire:model.live="outlet"
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
                                <input type="checkbox" wire:model.live="stock_min"
                                    class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                <span class="text-sm">min. 4 db azonnal</span>
                            </label>
                        </div>

                        <!-- Price Category -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Árkategória</h3>
                            <div class="space-y-2">
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="price_category" value="budget"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Budget</span>
                                </label>
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="price_category" value="közepes"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Közepes</span>
                                </label>
                                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                                    <input type="checkbox" wire:model.live="price_category" value="prémium"
                                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                                    <span class="text-sm">Prémium</span>
                                </label>
                            </div>
                        </div>
                        <!-- Price Filter -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Árszűrő</h3>
                            <div class="flex items-center gap-2">
                                <input type="number" wire:model.live="price_min" min="0" placeholder="min"
                                    class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                                <span class="text-gray-500">-</span>
                                <input type="number" wire:model.live="price_max" min="0" placeholder="max"
                                    class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                                <span class="text-gray-500">Ft</span>
                            </div>
                        </div>
                    </div>

                    <!-- Extra Properties Group -->
                    <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
                        <!-- ET Range -->
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">ET tartomány</h3>
                            <div class="flex items-center gap-2">
                                <input type="number" wire:model.live="et_min" step="0.1" min="0"
                                    placeholder="min ET"
                                    class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                                <span class="text-gray-500">-</span>
                                <input type="number" wire:model.live="et_max" step="0.1" min="0"
                                    placeholder="max ET"
                                    class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                            </div>
                        </div>

                        <!-- Dedication -->
                        {{-- <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Szín</h3>
                            <select wire:model.live="dedication"
                                class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                                <option value="">Összes...</option>
                                @foreach (Product::wheel()->whereNotNull('rim_color')->distinct('rim_color')->pluck('rim_color') as $rim_color)
                                    <option value="{{ $rim_color }}">{{ $rim_color }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                    </div>

                    <!-- Contact -->
                    <div class="bg-green-600 text-white p-4 mb-6 rounded-lg">
                        <h3 class="font-semibold mb-2">ÜGYFÉLSZOLGÁLAT</h3>
                        <p class="text-sm mb-2">Hívjon minket, ha megtudásával kapcsolatban kérdése van!</p>
                        <div class="flex items-center text-lg font-bold">
                            <i class="fas fa-phone mr-2"></i>
                            +36 1 123 45 67
                        </div>
                    </div>

                    <!-- Opening Hours -->
                    <div class="mt-4 text-sm text-gray-600">
                        <div class="font-semibold mb-2">ELÉRHETŐSÉG</div>
                        <div>H-P: 8:00 - 18:00</div>
                        <div>SZ: 8:00 - 15:00</div>
                        <div>V: ZÁRVA</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Area -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($products ?? [] as $product)
                <livewire:product-add-to-cart :productId="$product->id" :key="$product->id" />
            @endforeach
        </div>

    </div>
    {{ $products->links() }}

    <script>
        let sliderInitialized = false;

        function destroySlider() {
            const slider = $('#wheel-width-slider');
            if (slider.length && slider.data("ionRangeSlider")) {
                slider.data("ionRangeSlider").destroy();
                sliderInitialized = false;
            }
        }

        function initializeSlider() {
            // Don't initialize if already done
            if (sliderInitialized) return;

            const slider = $('#wheel-width-slider');
            if (slider.length && typeof slider.ionRangeSlider === 'function') {
                slider.ionRangeSlider({
                    type: "double",
                    min: {{ Product::wheel()->min('width') }},
                    max: {{ Product::wheel()->max('width') }},
                    from: {{ Product::wheel()->min('width') }},
                    to: {{ Product::wheel()->max('width') }},
                    step: 0.5,
                    grid: true,
                    skin: "round",
                    postfix: "\"",
                    onFinish: function(data) {
                        document.getElementById('widthMin').value = data.min;
                        document.getElementById('widthMax').value = data.max;
                    }
                });
                sliderInitialized = true;
            }
        }

        // Initialize only once when page loads
        document.addEventListener('DOMContentLoaded', function() {
            // Wait a bit for all scripts to load
            setTimeout(() => {
                initializeSlider();
            }, 500);
        });

        // For Livewire v3
        document.addEventListener('livewire:navigated', function() {
            setTimeout(() => {
                if (!sliderInitialized) {
                    initializeSlider();
                }
            }, 500);
        });
    </script>
</div>
