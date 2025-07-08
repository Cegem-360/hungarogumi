<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\Models\Cart;
use Closure;
use Illuminate\Support\Facades\Cookie;

final class EnsureCartExists
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $cartCookie = $request->cookie('cart_id');

        if (! $cartCookie || ! Cart::where('cookie_id', $cartCookie)->exists()) {
            $cart = Cart::create(['cookie_id' => $cartCookie ?? uniqid()]);
            Cookie::queue('cart_id', $cart->cookie_id, 60 * 24 * 30); // 30 napos lejárat
        }

        return $next($request);
    }
}
