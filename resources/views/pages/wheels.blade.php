@use('App\Models\Product')
<x-layouts.app>
    <x-slot name="title">Felnik</x-slot>
    <x-slot name="description">Fedezze fel a legjobb felniket széles választékunkból!</x-slot>
    <x-slot name="keywords">felnik, autófelnik, könnyűfelnik, alufelnik, 18 col</x-slot>
    <!-- Breadcrumb -->
    <div class="container mx-auto px-4 py-3">
        <nav class="flex text-sm text-gray-500">
            <a href="#" class="hover:text-gray-700">somigumi.hu</a>
            <span class="mx-2">></span>
            <a href="#" class="hover:text-gray-700">Felnik</a>
            <span class="mx-2">></span>
            <span class="text-gray-700">18 col</span>
        </nav>
    </div>
    <section class="py-8 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Felnik</h2>
            </div>

            <div class="grid md:grid-cols-[1fr_3fr] gap-6 items-start">
                <!-- Left Sidebar -->
                <div class="filter">
                    <x-partials.filter />
                </div>
                <!-- Main Content Area -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach (Product::limit(12)->get() ?? [] as $product)
                        <livewire:product-add-to-cart :product_id="$product->id" wire:key="$product->id" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <x-featured-products />
    <x-customer-reviews />
    <x-hero />
    <x-services />
    <x-special-offers />
    <x-popular-brands />
    <x-news />
    <x-promotions />

    <x-slot name="scripts">
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize any JavaScript functionality if needed
                // For example, you can add event listeners or initialize plugins here
                console.log('Felnik page loaded');
                // Example: Add a click event to a button
                document.querySelectorAll('.product-card').forEach(card => {
                    card.addEventListener('click', function() {
                        alert('Termék kiválasztva: ' + this.querySelector('.product-name').textContent);
                    });
                });
            });
        </script>
    </x-slot>

</x-layouts.app>
