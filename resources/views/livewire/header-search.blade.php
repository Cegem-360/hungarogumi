<form wire:submit.prevent="performSearch" class="flex sm:min-w-sm">
    <input type="text" wire:model="search" placeholder="Milyen terméket keresel?"
        class="flex-1 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
    <button type="submit"
        class="bg-brand-blue text-white px-4 py-2 rounded-r-md hover:bg-brand-blue/80 transition-colors">
        <i class="fa-solid fa-magnifying-glass"></i>
    </button>
</form>
