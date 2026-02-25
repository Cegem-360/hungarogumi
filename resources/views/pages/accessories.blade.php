<x-layouts.app>
    <x-slot name="title">Kiegészítők</x-slot>
    <x-slot name="description">Autós kiegészítők széles választéka: csavarok, anyák, mankókerék, szűkítő gyűrű, TPMS szelep és még sok más.</x-slot>
    <x-slot name="keywords">autós kiegészítők, csavarok, anyák, mankókerék, szűkítő gyűrű, TPMS szelep</x-slot>

    <!-- Breadcrumb -->
    <x-breadcrumb />

    <section class="py-8 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Kiegészítők</h2>
            </div>
            <livewire:product-accessories-search />
        </div>
    </section>
</x-layouts.app>
