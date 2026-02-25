<?php

declare(strict_types=1);

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;

it('calculates the total as a float', function () {
    $cart = Cart::factory()->create();

    $product = Product::factory()->create(['net_retail_price' => 10000]);

    CartItem::factory()->create([
        'cart_id' => $cart->id,
        'product_id' => $product->id,
        'quantity' => 2,
    ]);

    $cart->refresh();

    $expected = 2 * round(10000 * 1.27);

    expect($cart->total())->toBe($expected);
});

it('returns zero for an empty cart', function () {
    $cart = Cart::factory()->create();

    expect($cart->total())->toBe(0.0);
});
