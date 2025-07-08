<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Product;
use App\Services\CartService;
use Filament\Notifications\Notification;
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

    public function addToCart($quantity): void
    {
        $this->validate([
            'productId' => ['required', 'exists:products,id'],
        ]);

        $product = Product::find($this->productId);
        if ($product) {
            // Assuming you have a CartService to handle adding items to the cart
            $cartService = new CartService();
            $cartService->addItem($this->productId, $quantity);
            Notification::make()
                ->title('Success')
                ->body('Product added to cart successfully.')
                ->success()
                ->send();
        } else {
            Notification::make()
                ->title('Fail')
                ->body('Product can\'t be added to cart.')
                ->danger()
                ->send();
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
