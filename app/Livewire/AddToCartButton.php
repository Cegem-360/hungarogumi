<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Product;
use App\Services\CartService;
use Livewire\Component;

final class AddToCartButton extends Component
{
    public Product $product;

    public $quantity;

    public bool $loading = false;

    public function mount(Product $product): void
    {
        $this->product = $product;
        $this->quantity = $product->min_order_quantity ?? 1;
    }

    public function getBruttoProperty(): float|int
    {
        return property_exists($this->product, 'net_retail_price') && $this->product->net_retail_price !== null
            ? round($this->product->net_retail_price * 1.27)
            : 0;
    }

    public function addToCart(CartService $cartService): void
    {
        $cartItem = $cartService->getItem($this->product->id);
        if ($cartItem && $cartItem->quantity + $this->quantity > $this->product->all_quantity) {
            // Dispatch event for frontend notification
            $this->dispatch('notify', [
                'type' => 'error',
                'title' => 'Hiba',
                'message' => 'A kosárban lévő mennyiség meghaladja a készletet.',
                'duration' => 5000,
            ]);

            return;
        }

        if ($this->product && $this->product->all_quantity >= 0 && $this->product->min_order_quantity <= $this->quantity) {
            // Assuming you have a CartService to handle adding items to the cart
            $cartService = new CartService();

            $cartService->addItem($this->product->id, $this->quantity);

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

    public function updatedQuantity(): void
    {
        $minQty = $this->product->min_order_quantity ?? 1;
        $maxQty = $this->product->all_quantity ?? 8;

        if ($this->quantity < $minQty) {
            $this->quantity = $minQty;
        } elseif ($this->quantity > $maxQty) {
            $this->quantity = $maxQty;
        }
    }

    public function render()
    {
        return view('livewire.add-to-cart-button');
    }
}
