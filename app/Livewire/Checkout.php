<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Services\CartService;
use Livewire\Component;

final class Checkout extends Component
{
    public function render()
    {
        $cartService = app(CartService::class);

        return view('livewire.checkout', ['cart' => $cartService->getCart()]);
    }
}
