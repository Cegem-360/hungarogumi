@use('App\Models\Product')
<x-layouts.app>
    <x-slot name="title">Felnik</x-slot>
    <x-slot name="description">Fedezze fel a legjobb felniket széles választékunkból!</x-slot>
    <x-slot name="keywords">felnik, autófelnik, könnyűfelnik, alufelnik, 18 col</x-slot>
    <!-- Breadcrumb -->
    <x-breadcrumb />

    <section class="py-8 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Felnik</h2>
            </div>

            <livewire:wheel-list>
        </div>
    </section>

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
