<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

final class CartService
{
    private $cart;

    public function __construct()
    {
        $userId = Auth::id();
        if (Auth::check()) {
            $this->cart = Cart::firstOrCreate(['user_id' => $userId]);
        } else {
            $sessionId = Session::getId();
            $this->cart = Cart::firstOrCreate(['session_id' => $sessionId]);
        }
    }

    public function addItem($productId, $quantity): void
    {
        $cartItem = $this->cart->items()->where('product_id', $productId)->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            $this->cart->items()->create([
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
        }
    }

    public function updateItem($productId, $quantity): void
    {
        $cartItem = $this->cart->items()->where('product_id', $productId)->first();

        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->save();
        }
    }

    public function removeItem($productId): void
    {
        $this->cart->items()->where('product_id', $productId)->delete();
    }

    public function clearCart(): void
    {
        $this->cart->items()->delete();
    }

    public function getCartItems()
    {
        return $this->cart->items;
    }

    public function getTotal()
    {
        return $this->cart->items->sum(function ($item): int|float {
            return $item->product->price * $item->quantity;
        });
    }
}
