<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Services\CartService;
use Livewire\Component;

final class Cart extends Component
{
    public function mount() {}

    public function checkout()
    {

        $this->redirect(route('checkout.index'), true);

    }

    public function render()
    {
        $cartService = app(CartService::class);
        $cart = $cartService->getCart();

        return view('livewire.cart', [
            'cart' => $cart,
        ]);
    }
}
