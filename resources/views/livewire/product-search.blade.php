<div>
    <!-- Keresős form -->
    <div class="bg-white shadow-sm border-b border-gray-200 mb-6">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row gap-4 items-center">
                <!-- Keresőmező -->
                <div class="flex-1 max-w-md">
                    <div class="relative">
                        <input type="text" wire:model.live.debounce.300ms="search"
                            placeholder="Milyen terméket keresel?"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                        </div>
                    </div>
                </div>

                <!-- Kategória szűrő -->
                <div class="flex-shrink-0">
                    <select wire:model.live="category"
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                        <option value="">Összes kategória</option>
                        <option value="gumi">Gumik</option>
                        <option value="felni">Felnik</option>
                        <option value="komplett">Komplett kerekek</option>
                        <option value="nyari">Nyári gumik</option>
                        <option value="teli">Téli gumik</option>
                        <option value="negyevszakos">Négyévszakos gumik</option>
                    </select>
                </div>

                <!-- Rendezés -->
                <div class="flex-shrink-0">
                    <select wire:model.live="sortBy"
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                        <option value="name">Név szerint</option>
                        <option value="price">Ár szerint</option>
                        <option value="manufacturer">Gyártó szerint</option>
                    </select>
                </div>

                <!-- Rendezés iránya -->
                <div class="flex-shrink-0">
                    <button wire:click="toggleSortDirection"
                        class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-blue">
                        @if ($sortDirection === 'asc')
                            <i class="fas fa-sort-up"></i>
                        @else
                            <i class="fas fa-sort-down"></i>
                        @endif
                    </button>
                </div>
            </div>

            <!-- Keresési eredmények száma -->
            @if ($search)
                <div class="mt-4 text-sm text-gray-600">
                    Keresési eredmények: "{{ $search }}" - {{ $products->total() }} termék találat
                </div>
            @endif
        </div>
    </div>

    <!-- Termékek listája -->
    <div class="container mx-auto px-4">
        @if ($products->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                @foreach ($products as $product)
                    <livewire:product-add-to-cart :product-id="$product->id" :key="'product-' . $product->id" />
                @endforeach
            </div>

            <!-- Lapozás -->
            <div class="mb-8">
                {{ $products->links() }}
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
                        Jelenleg nincsenek elérhető termékek.
                    @endif
                </p>
                @if ($search)
                    <button wire:click="$set('search', '')"
                        class="mt-4 px-4 py-2 bg-brand-blue text-white rounded-md hover:bg-brand-blue/80">
                        Keresés törlése
                    </button>
                @endif
            </div>
        @endif
    </div>
</div>
