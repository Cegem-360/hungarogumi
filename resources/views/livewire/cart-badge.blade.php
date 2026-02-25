<a href="{{ route('cart.index') }}" wire:navigate class="relative">
    <div class="flex items-center space-x-1">
        <i class="fas fa-shopping-cart text-gray-600"></i>
        <span class="hidden md:inline">Kosár</span>
    </div>
    @if ($count > 0)
        <span class="absolute -top-2 -right-3 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
            {{ $count > 99 ? '99+' : $count }}
        </span>
    @endif
</a>
