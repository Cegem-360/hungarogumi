<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Services\CartService;
use Livewire\Attributes\On;
use Livewire\Component;

final class CartBadge extends Component
{
    public int $count = 0;

    public function mount(): void
    {
        $this->updateCount();
    }

    #[On('notify')]
    public function updateCount(): void
    {
        $cartService = new CartService();
        $cart = $cartService->getCart();
        $this->count = $cart->items->sum('quantity');
    }

    public function render()
    {
        return view('livewire.cart-badge');
    }
}
