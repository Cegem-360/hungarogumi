@use('App\Models\Product\Category')
@use('App\Models\Product')
<div>
    <!-- Kategória kártyák -->
    <div class="container mx-auto px-4 py-6">
        @php
            $accessoryCategories = Product::whereNot('item_type_name', 'gumiabroncs')
                ->whereNot('item_type_name', 'lemezfelni')
                ->whereNot('item_type_name', 'alufelni')
                ->where('all_quantity', '>', 0)
                ->selectRaw('item_type_name, COUNT(*) as count')
                ->groupBy('item_type_name')
                ->orderByDesc('count')
                ->get();

            $categoryIcons = [
                'tehermentesítő gyűrűk' => 'fa-ring',
                'mankókerék' => 'fa-tire',
                'dísztárcsák' => 'fa-circle',
                'csavarok és anyák' => 'fa-wrench',
                'autószőnyegek' => 'fa-car',
                'takaróhuzatok' => 'fa-couch',
                'kerékanya' => 'fa-cog',
                'csavar' => 'fa-screwdriver',
            ];
        @endphp
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-3">
            @foreach ($accessoryCategories as $cat)
                <button wire:click="$set('category', '{{ $cat->item_type_name }}')"
                    class="group flex flex-col items-center gap-2 p-4 rounded-lg transition-all
                        {{ $category === $cat->item_type_name ? 'bg-brand-blue text-white shadow-md' : 'bg-white hover:bg-brand-blue hover:text-white border border-gray-200' }}">
                    <i class="fas {{ $categoryIcons[$cat->item_type_name] ?? 'fa-box' }} text-2xl
                        {{ $category === $cat->item_type_name ? 'text-white' : 'text-brand-blue group-hover:text-white' }}"></i>
                    <span class="text-sm font-medium text-center capitalize">{{ $cat->item_type_name }}</span>
                    <span class="text-xs {{ $category === $cat->item_type_name ? 'text-blue-100' : 'text-gray-400 group-hover:text-blue-100' }}">{{ $cat->count }} db</span>
                </button>
            @endforeach
            @if ($category !== '')
                <button wire:click="$set('category', '')"
                    class="flex flex-col items-center justify-center gap-2 p-4 rounded-lg bg-gray-100 hover:bg-gray-200 border border-gray-200 transition-all">
                    <i class="fas fa-times text-2xl text-gray-500"></i>
                    <span class="text-sm font-medium text-gray-600">Összes</span>
                </button>
            @endif
        </div>
    </div>

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
                        @foreach (Category::whereNot('name', 'gumiabroncs')->whereNot('name', 'lemezfelni')->whereNot('name', 'alufelni')->pluck('name') as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
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
                    <livewire:product-add-to-cart :productId="$product->id" :key="'product-' . $product->id" />
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
