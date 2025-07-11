<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

final class CheckoutController extends Controller
{
    public function success(Request $request)
    {
        $orderId = $request->session()->get('order_id');
        $order = $orderId ? Order::with(['orderItems.product', 'shippingMethod'])->find($orderId) : null;

        return view('pages.checkout-success', ['order' => $order]);
    }
}
