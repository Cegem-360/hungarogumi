@use('App\Models\Product')

<section class="py-8 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Kiemelt termékeink</h2>
            <a href="#" class="text-brand-blue hover:underline">Kiemelt termékek</a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach (Product::limit(9)->get() ?? [] as $product)
                <livewire:product-add-to-cart :productId="$product->id" :key="'featured-' . $product->id" />
            @endforeach
        </div>
    </div>
</section>
