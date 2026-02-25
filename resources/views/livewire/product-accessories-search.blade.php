<div>
    <div class="grid md:grid-cols-[1fr_3fr] gap-6 items-start">
        <!-- Sidebar -->
        <div>
            <div class="sticky top-4">
                <div>

                    <!-- Keresőmező -->
                    <div class="mb-6 p-4 bg-gray-200 border border-gray-100 rounded-lg">
                        <h3 class="font-semibold text-gray-900 mb-3">Keresés</h3>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-magnifying-glass text-gray-400 text-sm"></i>
                            </div>
                            <input type="text" wire:model.live.debounce.300ms="search"
                                placeholder="Termék neve, cikkszám..."
                                class="w-full pl-9 pr-8 py-2 bg-gray-100 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue">
                            @if ($search)
                                <button wire:click="$set('search', '')"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
                                    <i class="fa-solid fa-xmark text-sm"></i>
                                </button>
                            @endif
                        </div>
                    </div>

                    <!-- Kategória szűrő -->
                    <div class="mb-6 p-4 bg-gray-200 border border-gray-100 rounded-lg">
                        <h3 class="font-semibold text-gray-900 mb-3">Kategória</h3>
                        <div class="space-y-1 max-h-80 overflow-y-auto">
                            <label
                                class="flex items-center justify-between p-2 rounded cursor-pointer transition-colors
                                    {{ $category === '' ? 'bg-brand-blue text-white' : 'bg-gray-100 hover:bg-gray-50' }}">
                                <div class="flex items-center">
                                    <input type="radio" wire:model.live="category" value=""
                                        class="sr-only">
                                    <i class="fas fa-border-all text-sm mr-2 {{ $category === '' ? 'text-white' : 'text-brand-blue' }}"></i>
                                    <span class="text-sm font-medium">Összes</span>
                                </div>
                            </label>
                            @foreach ($this->accessoryCategories as $cat)
                                <label
                                    class="flex items-center justify-between p-2 rounded cursor-pointer transition-colors
                                        {{ $category === $cat->item_type_name ? 'bg-brand-blue text-white' : 'bg-gray-100 hover:bg-gray-50' }}">
                                    <div class="flex items-center">
                                        <input type="radio" wire:model.live="category"
                                            value="{{ $cat->item_type_name }}" class="sr-only">
                                        <span class="text-sm capitalize">{{ $cat->item_type_name }}</span>
                                    </div>
                                    <span
                                        class="text-xs px-1.5 py-0.5 rounded-full {{ $category === $cat->item_type_name ? 'bg-white/20 text-white' : 'bg-gray-200 text-gray-500' }}">
                                        {{ $cat->count }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Gyártó szűrő -->
                    @if ($this->accessoryManufacturers->count() > 0)
                        <div class="mb-6 p-4 bg-gray-200 border border-gray-100 rounded-lg">
                            <h3 class="font-semibold text-gray-900 mb-3">Gyártó</h3>
                            <select wire:model.live="manufacturer"
                                class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                                <option value="">Összes...</option>
                                @foreach ($this->accessoryManufacturers as $mfr)
                                    <option value="{{ $mfr->name }}">{{ $mfr->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif

                    <!-- Árszűrő -->
                    <div class="mb-6 p-4 bg-gray-200 border border-gray-100 rounded-lg">
                        <h3 class="font-semibold text-gray-900 mb-3">Árszűrő</h3>
                        <div class="flex items-center gap-2">
                            <input type="number" wire:model.live.debounce.500ms="price_min" min="0"
                                placeholder="min"
                                class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                            <span class="text-gray-500">-</span>
                            <input type="number" wire:model.live.debounce.500ms="price_max" min="0"
                                placeholder="max"
                                class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                            <span class="text-gray-500 text-sm">Ft</span>
                        </div>
                    </div>

                    <!-- Ügyfélszolgálat -->
                    <div class="bg-green-600 text-white p-4 mb-6 rounded-lg">
                        <h3 class="font-semibold mb-2">ÜGYFÉLSZOLGÁLAT</h3>
                        <p class="text-sm mb-2">Hívjon minket, ha kérdése van!</p>
                        <div class="flex items-center text-lg font-bold">
                            <i class="fas fa-phone mr-2"></i>
                            +36 30 700 9668
                        </div>
                    </div>

                    <!-- Nyitvatartás -->
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

        <!-- Fő tartalom -->
        <div>
            <div class="flex items-center justify-between mb-4">
                <div class="text-sm text-gray-600">
                    {{ $products->total() }} termék
                </div>
                <div class="flex items-center gap-2">
                    <label class="text-sm text-gray-600">Rendezés:</label>
                    <select wire:model.live="sortBy"
                        class="bg-gray-100 border border-gray-300 rounded px-3 py-1 text-sm">
                        <option value="availability">Elérhetőség</option>
                        <option value="price_asc">Ár: alacsony elől</option>
                        <option value="price_desc">Ár: magas elől</option>
                        <option value="name">Név szerint</option>
                    </select>
                </div>
            </div>

            @if ($products->count() > 0)
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($products as $product)
                        <livewire:product-add-to-cart :productId="$product->id"
                            :key="'product-' . $product->id" />
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <div class="text-gray-400 mb-4">
                        <i class="fas fa-search text-6xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Nincs találat</h3>
                    <p class="text-gray-500">
                        @if ($search)
                            Nem találtunk terméket a "{{ $search }}" keresőszóra.
                        @else
                            Jelenleg nincsenek elérhető termékek a kiválasztott szűrőkkel.
                        @endif
                    </p>
                    @if ($search || $category || $manufacturer || $price_min || $price_max)
                        <button
                            wire:click="$set('search', ''); $set('category', ''); $set('manufacturer', ''); $set('price_min', ''); $set('price_max', '')"
                            class="mt-4 px-4 py-2 bg-brand-blue text-white rounded-md hover:bg-brand-blue/80">
                            Szűrők törlése
                        </button>
                    @endif
                </div>
            @endif
        </div>
    </div>

    <!-- Lapozás -->
    @if ($products->hasPages())
        <div class="mt-6 mb-8">
            {{ $products->links() }}
        </div>
    @endif
</div>
