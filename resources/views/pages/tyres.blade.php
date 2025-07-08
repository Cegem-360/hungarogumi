<x-layouts.app>
    <x-slot name="title">Gumiabroncsok</x-slot>
    <x-slot name="description">Fedezze fel a legjobb gumiabroncsokat széles választékunkból!</x-slot>
    <x-slot name="keywords">gumiabroncsok, autógumik, nyári gumik, téli gumik, 205/55 R16</x-slot>

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
            <!-- Left Sidebar -->
            <livewire:tyre-list>

        </div>
    </section>
</x-layouts.app>
