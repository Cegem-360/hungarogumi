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
        $product = Product::find($this->productId);
        if ($product) {
            // Assuming you have a CartService to handle adding items to the cart
            $cartService = new CartService();
            $cartService->addItem($this->productId, $quantity);

            // Dispatch event for frontend notification
            $this->dispatch('notify', [
                'type' => 'success',
                'title' => 'Sikeres hozzáadás',
                'message' => 'A termék sikeresen hozzáadva a kosárhoz.',
                'duration' => 3000,
            ]);
        } else {
            // Dispatch event for frontend notification
            $this->dispatch('notify', [
                'type' => 'error',
                'title' => 'Hiba',
                'message' => 'A terméket nem sikerült hozzáadni a kosárhoz.',
                'duration' => 5000,
            ]);
        }
    }

    public function render()
    {
        $product = Product::find($this->productId);

        return view('livewire.product-add-to-cart', [
            'product' => $product,
        ]);
    }
}
