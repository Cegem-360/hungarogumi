<x-layouts.app>
    <x-slot:title>
        {{ __('Check out') }}
    </x-slot>

    <x-slot:header>
        {{ __('Check out') }}
    </x-slot:header>

    <div class="container mx-auto px-4">
        <livewire:checkout />
    </div>
</x-layouts.app>
