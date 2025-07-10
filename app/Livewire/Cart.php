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

    public function updateQuantity($cartItemId, $quantity): void
    {
        $cartService = app(CartService::class);
        $cartItem = $cartService->getItem($cartItemId);
        if ($cartItem && $quantity > $cartItem->product->all_quantity) {
            // Dispatch event for frontend notification
            $this->dispatch('notify', [
                'type' => 'error',
                'title' => 'Hiba',
                'message' => 'A kosárban lévő mennyiség meghaladja a készletet.',
                'duration' => 5000,
            ]);

            return;
        }

        $cartService->updateItem($cartItemId, (int) $quantity);
        $this->dispatch('notify', [
            'type' => 'success',
            'title' => 'Siker',
            'message' => 'A kosárban lévő mennyiség frissítve lett.',
            'duration' => 5000,
        ]);
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
