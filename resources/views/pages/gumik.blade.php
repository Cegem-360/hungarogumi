@use('App\Models\Product')

<!-- Breadcrumb -->
<div class="container mx-auto px-4 py-3">
    <nav class="flex text-sm text-gray-500">
        <a href="#" class="hover:text-gray-700">somigumi.hu</a>
        <span class="mx-2">></span>
        <a href="#" class="hover:text-gray-700">Gumiabroncsok</a>
        <span class="mx-2">></span>
        <span class="text-gray-700">205/55 R16</span>
    </nav>
</div>

<section class="py-8 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Gumiabroncsok</h2>
        </div>

        <div class="grid md:grid-cols-[1fr_3fr] gap-6 items-start">
            <!-- Left Sidebar -->
            <div class="filter">
                <x-partials.filter />
            </div>
            <!-- Main Content Area -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach (Product::limit(12)->get() ?? [] as $product)
                    <x-partials.product-card :product="$product" />
                @endforeach
            </div>
        </div>
    </div>
</section>
