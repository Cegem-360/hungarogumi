<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

final class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // Ha email verification linket próbál elérni
            if ($request->is('email/verify/*')) {
                return route('login').'?must_login_for_verification=1';
            }

            return route('login');
        }
    }
}
