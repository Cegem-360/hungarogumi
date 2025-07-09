<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Services\CartService;
use Closure;
use Illuminate\Http\Request;

final class EnsureCartNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request):((Response|RedirectResponse)) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Allow access to the order success page
        if ($request->routeIs('checkout.success')) {
            return $next($request);
        }

        $cartService = app(CartService::class);
        $cart = $cartService->getCart();

        if ($cart->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'A kosár üres. Kérjük, adjon hozzá terméket a folytatáshoz!');
        }

        return $next($request);
    }
}
