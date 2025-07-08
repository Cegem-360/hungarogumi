<x-layouts.app>
    <x-slot name="title">{{ $product->item_name ?? 'Termék' }}</x-slot>
    <x-slot name="description">{{ $product->description ?? 'Nincs leírás' }}</x-slot>
    <x-slot name="keywords">{{ $product->keywords ?? 'Nincs kulcsszók' }}</x-slot>
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Product Image -->
            <div class="md:w-1/3">
                <img src="{{ $product->main_image ?? 'https://via.placeholder.com/400' }}" alt="{{ $product->item_name }}"
                    class="w-full h-auto object-contain mb-4">
            </div>

            <!-- Product Details -->
            <div class="md:w-2/3">
                <h1 class="text-3xl font-bold mb-4">{{ $product->item_name ?? 'Nincs termék név' }}</h1>
                <p class="text-gray-700 mb-4">{{ $product->description ?? 'Nincs leírás' }}</p>
                <div class="text-xl font-bold text-brand-blue mb-4">
                    {{ $product->net_retail_price ? Number::currency($product->net_retail_price, 'HUF', 'hu', 0) : 'Nincs ár' }}
                </div>
                <div class="text-xs text-gray-500 mb-3">
                    {{ $product->consumption ? 'Energiacímke: ' . $product->consumption : 'Nincs energiacímke' }} |
                    {{ $product->grip ? 'Tapadás nedves úton: ' . $product->grip : 'Nincs tapadás' }}
                </div>
                <button class="w-full bg-brand-blue text-white py-2 rounded hover:bg-brand-blue/80">
                    Kosárba tesz <i class="fas fa-cart-plus ml-1"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <section class="py-8 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6">Kapcsolódó termékek</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($relatedProducts as $relatedProduct)
                    <livewire:product-add-to-cart :product_id="$relatedProduct->id" wire:key="$relatedProduct->id"
                        wire:key="$product->id" />
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
