<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Product;
use App\Services\CartService;
use Livewire\Component;

final class Cart extends Component
{
    public function mount(): void {}

    public function checkout(): void
    {

        $this->redirect(route('checkout.index'), true);

    }

    public function removeFromCart($cartItemId): void
    {
        $product = Product::find($cartItemId);
        if ($product) {
            $cartService = new CartService();
            $cartService->removeItem($cartItemId);
            // Optionally, handle notifications here
        }
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
