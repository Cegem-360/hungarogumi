<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Product;
use App\Services\CartService;
use Livewire\Attributes\Locked;
use Livewire\Component;

final class ProductAddToCart extends Component
{
    #[Locked]
    public $productId;

    public function mount(int $productId): void
    {
        $this->productId = $productId;

    }

    public function addToCart(int $quantity): void
    {
        $cartService = new CartService();
        $cartItem = $cartService->getItem($this->productId);
        if ($cartItem === null) {
            $cartService->addItem($this->productId, $quantity);
            $this->dispatch('notify', [
                'type' => 'success',
                'title' => 'Sikeres hozzáadás',
                'message' => 'A termék sikeresen hozzáadva a kosárhoz.',
                'duration' => 3000,
            ]);

            return;
        }

        if ($cartItem && $cartItem->quantity + $quantity > $cartItem->product->all_quantity) {
            // Dispatch event for frontend notification
            $this->dispatch('notify', [
                'type' => 'error',
                'title' => 'Hiba',
                'message' => 'A kosárban lévő mennyiség meghaladja a készletet.',
                'duration' => 5000,
            ]);

            return;
        }

        $cartService->addItem($this->productId, $quantity);

        // Dispatch event for frontend notification
        $this->dispatch('notify', [
            'type' => 'success',
            'title' => 'Sikeres hozzáadás',
            'message' => 'A termék sikeresen hozzáadva a kosárhoz.',
            'duration' => 3000,
        ]);

    }

    public function render()
    {
        $product = Product::find($this->productId);

        return view('livewire.product-add-to-cart', [
            'product' => $product,
        ]);
    }
}
