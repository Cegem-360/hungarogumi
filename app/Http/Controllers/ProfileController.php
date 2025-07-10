<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

final class ProfileController extends Controller
{
    public function orders()
    {
        $user = Auth::user();
        $orders = $user->orders()->with(['orderItems.product', 'shippingMethod'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('profile.orders', compact('orders'));
    }

    public function profile()
    {
        return view('profile.profile');
    }
}
