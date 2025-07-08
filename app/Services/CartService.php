<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

final class CartService
{
    private $cart;

    public function __construct()
    {
        $this->cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
    }

    public function addItem($productId, $quantity)
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

    public function removeItem($productId)
    {
        $this->cart->items()->where('product_id', $productId)->delete();
    }

    public function clearCart()
    {
        $this->cart->items()->delete();
    }

    public function getCartItems()
    {
        return $this->cart->items;
    }

    public function getTotal()
    {
        return $this->cart->items->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });
    }
}
