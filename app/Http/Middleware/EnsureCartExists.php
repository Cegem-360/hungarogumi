<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Models\Cart;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

final class EnsureCartExists
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userId = Auth::id();
        if (Auth::check()) {
            Cart::firstOrCreate(['user_id' => $userId]);
        } else {
            $sessionId = Session::getId();
            Cart::firstOrCreate(['session_id' => $sessionId]);
        }

        return $next($request);
    }
}
