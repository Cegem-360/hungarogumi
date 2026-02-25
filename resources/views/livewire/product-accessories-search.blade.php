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
    <div class="container mx-auto px-4 mb-6">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 md:p-5">
            <div class="flex flex-col md:flex-row gap-3 items-stretch md:items-center">
                <!-- Keresőmező -->
                <div class="flex-1">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                            <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                        </div>
                        <input type="text" wire:model.live.debounce.300ms="search"
                            placeholder="Keresés a kiegészítők között..."
                            class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue focus:bg-white transition-colors">
                        @if ($search)
                            <button wire:click="$set('search', '')" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-gray-400 hover:text-gray-600">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        @endif
                    </div>
                </div>

                <div class="flex flex-wrap gap-3 items-center">
                    <!-- Kategória szűrő -->
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-layer-group text-gray-400 text-xs"></i>
                        </div>
                        <select wire:model.live="category"
                            class="pl-8 pr-8 py-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue appearance-none cursor-pointer">
                            <option value="">Összes kategória</option>
                            @foreach (Category::whereNot('name', 'gumiabroncs')->whereNot('name', 'lemezfelni')->whereNot('name', 'alufelni')->pluck('name') as $cat)
                                <option value="{{ $cat }}">{{ ucfirst($cat) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Rendezés -->
                    <div class="flex items-center bg-gray-50 border border-gray-200 rounded-lg overflow-hidden">
                        <div class="pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-arrow-down-wide-short text-gray-400 text-xs"></i>
                        </div>
                        <select wire:model.live="sortBy"
                            class="pl-2 pr-8 py-2.5 bg-transparent border-0 text-sm focus:outline-none focus:ring-0 appearance-none cursor-pointer">
                            <option value="name">Név szerint</option>
                            <option value="price">Ár szerint</option>
                            <option value="manufacturer">Gyártó szerint</option>
                        </select>
                        <button wire:click="toggleSortDirection"
                            class="px-3 py-2.5 border-l border-gray-200 hover:bg-gray-100 transition-colors text-gray-500 hover:text-brand-blue"
                            title="{{ $sortDirection === 'asc' ? 'Növekvő' : 'Csökkenő' }}">
                            @if ($sortDirection === 'asc')
                                <i class="fas fa-arrow-up-short-wide text-sm"></i>
                            @else
                                <i class="fas fa-arrow-down-wide-short text-sm"></i>
                            @endif
                        </button>
                    </div>
                </div>
            </div>

            <!-- Keresési eredmények / aktív szűrők -->
            @if ($search || $category)
                <div class="flex flex-wrap items-center gap-2 mt-3 pt-3 border-t border-gray-100">
                    <span class="text-xs text-gray-500 uppercase tracking-wide font-medium">Szűrők:</span>
                    @if ($search)
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-brand-blue/10 text-brand-blue rounded-full text-xs font-medium">
                            <i class="fa-solid fa-magnifying-glass text-[10px]"></i>
                            "{{ $search }}"
                            <button wire:click="$set('search', '')" class="ml-0.5 hover:text-red-500"><i class="fa-solid fa-xmark"></i></button>
                        </span>
                    @endif
                    @if ($category)
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-brand-blue/10 text-brand-blue rounded-full text-xs font-medium">
                            <i class="fa-solid fa-tag text-[10px]"></i>
                            {{ ucfirst($category) }}
                            <button wire:click="$set('category', '')" class="ml-0.5 hover:text-red-500"><i class="fa-solid fa-xmark"></i></button>
                        </span>
                    @endif
                    <span class="text-xs text-gray-400 ml-auto">{{ $products->total() }} találat</span>
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
