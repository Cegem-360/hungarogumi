@props(['product'])

<div class="bg-white rounded-lg shadow-sm p-6">
    <h3 class="text-lg font-semibold text-gray-900 mb-6">Paraméterek</h3>

    <div class="grid grid-cols-1">
        <div class="space-y-0">
            @if ($product->item_type_name)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Típus</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->item_type_name }}</span>
                </div>
            @endif

            @if ($product->manufacturer && $product->manufacturer->name)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Márka</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->manufacturer->name }}</span>
                </div>
            @endif

            @if ($product->width)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Szélesség</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->width }} mm</span>
                </div>
            @endif

            @if ($product->aspect_ratio)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Profil</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->aspect_ratio }}%</span>
                </div>
            @endif

            @if ($product->structure)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Szerkezet</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->structure }}</span>
                </div>
            @endif

            @if ($product->diameter)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Átmérő</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->diameter }} col</span>
                </div>
            @endif

            @if ($product->pattern_name)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Mintázat</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->pattern_name }}</span>
                </div>
            @endif

            @if ($product->season)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Évszak</span>
                    <span class="text-sm font-medium text-gray-900">
                        @if ($product->season == 1)
                            Nyári gumi
                        @elseif($product->season == 2)
                            Téli gumi
                        @elseif($product->season == 3)
                            Négyévszakos gumi
                        @else
                            Ismeretlen évszak
                        @endif
                    </span>
                </div>
            @endif

            @if ($product->li)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Terhelési index (LI)</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->li }}</span>
                </div>
            @endif

            @if ($product->si)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Sebességi index (SI)</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->si }}</span>
                </div>
            @endif

            @if ($product->consumption)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Üzemanyag-fogyasztás</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->consumption }}</span>
                </div>
            @endif

            @if ($product->grip)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Nedves tapadás</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->grip }}</span>
                </div>
            @endif

            @if ($product->noise_level)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Zajszint</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->noise_level }}</span>
                </div>
            @endif

            @if ($product->noise_value)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Zaj érték</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->noise_value }} dB</span>
                </div>
            @endif

            @if ($product->runflat)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">RunFlat</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->runflat ? 'Igen' : 'Nem' }}</span>
                </div>
            @endif

            @if ($product->reinforced)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Megerősített</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->reinforced ? 'Igen' : 'Nem' }}</span>
                </div>
            @endif

            @if ($product->for_winter)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Téli használatra</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->for_winter ? 'Igen' : 'Nem' }}</span>
                </div>
            @endif

            @if ($product->ean)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">EAN kód</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->ean }}</span>
                </div>
            @endif

            @if ($product->factory_code)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Gyári szám</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->factory_code }}</span>
                </div>
            @endif

            @if ($product->weight)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Súly</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->weight }} kg</span>
                </div>
            @endif

            @if ($product->sku)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">SKU</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->sku }}</span>
                </div>
            @endif

            @if ($product->usage)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Használat</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->usage }}</span>
                </div>
            @endif

            @if ($product->rim_model)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Felni modell</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->rim_model }}</span>
                </div>
            @endif

            @if ($product->rim_color)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Felni szín</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->rim_color }}</span>
                </div>
            @endif

            @if ($product->bolt_count)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Csavarok száma</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->bolt_count }}</span>
                </div>
            @endif

            @if ($product->center_bore)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">Központi furat</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->center_bore }} mm</span>
                </div>
            @endif

            @if ($product->pcd)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">PCD</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->pcd }}</span>
                </div>
            @endif

            @if ($product->et)
                <div class="flex justify-between py-2 border-b border-gray-300">
                    <span class="text-sm text-gray-600">ET (kiállás)</span>
                    <span class="text-sm font-medium text-gray-900">{{ $product->et }}</span>
                </div>
            @endif
        </div>
    </div>
</div>
