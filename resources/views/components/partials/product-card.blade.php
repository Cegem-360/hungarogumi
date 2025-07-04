@props(['product'])

<div class="group bg-white hover:bg-gray-100 hover:shadow-xl transition-all border border-gray-400 rounded-lg p-4 h-fit">
    <div class="relative">
        <img src="{{ $product->main_image ?? 'https://via.placeholder.com/200' }}"
            alt="{{ $product->item_name ?? 'Nincs termék név' }}" class="w-full h-40 object-contain mb-4">
        <span class="absolute top-2 left-2 bg-yellow-400 text-black px-2 py-1 rounded text-xs font-bold">AKCIÓ</span>
    </div>
    <div class="text-sm font-medium mb-2">{{ $product->manufacturer->name ?? 'Nincs gyártó' }}
        {{ $product->item_name ?? 'Nincs' }}</div>
    <div class="text-xl font-bold text-brand-blue mb-2">
        {{ $product->net_retail_price ? number_format($product->net_retail_price, 0, '', ' ') . ' Ft' : 'Nincs ár' }}
    </div>
    <div class="text-xs text-gray-500 mb-3">
        {{ $product->consumption ? 'Energiacímke: ' . $product->consumption : 'Nincs energiacímke' }} |
        {{ $product->grip ? 'Tapadás nedves úton: ' . $product->grip : 'Nincs tapadás' }}</div>
    <button class="w-full bg-brand-blue text-white py-2 rounded hover:bg-brand-blue/80">
        Kosárba tesz <i class="fas fa-cart-plus ml-1"></i>
    </button>
</div>
