<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

final class ProfileController extends Controller
{
    public function orders(): Factory|View
    {
        $user = Auth::user();
        $orders = $user->orders()->with(['orderItems.product', 'shippingMethod'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('profile.orders', ['orders' => $orders]);
    }

    public function orderShow($id): Factory|View
    {
        $user = Auth::user();
        $order = $user->orders()->with(['orderItems.product', 'shippingMethod'])->findOrFail($id);

        return view('profile.order-show', ['order' => $order]);
    }

    public function profile(): Factory|View
    {
        return view('profile.profile');
    }
}
