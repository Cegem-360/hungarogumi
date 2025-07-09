<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Mail\OrderConfirmationCustomer;
use App\Mail\OrderNotificationAdmin;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ShippingMethod;
use App\Services\CartService;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Throwable;

final class Checkout extends Component
{
    public string $billingName = '';

    public string $billingEmail = '';

    public string $billingPhone = '';

    public string $billingAddress = '';

    public string $billingZip = '';

    public string $billingCity = '';

    public string $billingFloor = '';

    public string $billingCompany = '';

    public string $billingTaxNumber = '';

    public string $billingCompanyOffice = '';

    public string $shippingName = '';

    public string $shippingAddress = '';

    public string $shippingZip = '';

    public string $shippingCity = '';

    public string $shippingFloor = '';

    public string $shippingComment = '';

    public bool $termsAccepted = false;

    public bool $privacyAccepted = false;

    public bool $newsletterSubscribed = false;

    public bool $shippingSameAsBilling = true;

    public string $shippingMethod;

    public string $paymentMethod;

    public string $customerType = 'individual';

    public function checkout()
    {

        $this->validate([
            'billingName' => ['required', 'string', 'max:255'],
            'billingEmail' => ['required', 'email', 'max:255'],
            'billingPhone' => ['required', 'string', 'max:30'],
            'billingAddress' => ['required', 'string', 'max:255'],
            'billingZip' => ['required', 'string', 'min:4', 'max:6'],
            'billingCity' => ['required', 'string', 'max:100'],
            /* 'termsAccepted' => ['accepted'],
            'privacyAccepted' => ['accepted'], */
            'shippingMethod' => ['required', 'exists:shipping_methods,id'],
            'paymentMethod' => ['required', 'string'], // Example payment methods
        ]);

        if (! $this->shippingSameAsBilling) {
            $this->validate([
                'shippingName' => ['required', 'string', 'max:255'],
                'shippingAddress' => ['required', 'string', 'max:255'],
                'shippingZip' => ['required', 'string', 'max:20'],
                'shippingCity' => ['required', 'string', 'max:100'],
            ]);
        }

        $cartService = app(CartService::class);
        $cart = $cartService->getCart();

        $orderData = [
            'payment_method' => $this->paymentMethod,
            'payment_method_title' => 'Bank Transfer', // Example, can be dynamic
            'set_paid' => false, // Assuming payment is not done at checkout
            'billing_name' => $this->billingName,
            'billing_address_1' => $this->billingAddress,
            'billing_address_2' => $this->billingFloor,
            'billing_city' => $this->billingCity,
            'billing_state' => null, // Adjust if you have state fields
            'billing_postcode' => $this->billingZip,
            'billing_country' => null, // Adjust if you have country fields
            'billing_email' => $this->billingEmail,
            'billing_phone' => $this->billingPhone,
            'billing_vat_number' => $this->billingTaxNumber,
            'billing_company_name' => $this->billingCompany,
            'billing_company_office' => null, // Adjust if you have this field

            'shipping_address_1' => $this->shippingSameAsBilling ? $this->billingAddress : $this->shippingAddress,
            'shipping_address_2' => $this->shippingSameAsBilling ? $this->billingFloor : $this->shippingFloor,
            'shipping_city' => $this->shippingSameAsBilling ? $this->billingCity : $this->shippingCity,
            'shipping_state' => null, // Adjust if you have state fields
            'shipping_postcode' => $this->shippingSameAsBilling ? $this->billingZip : $this->shippingZip,
            'shipping_country' => null, // Adjust if you have country fields
            'shipping_method_id' => ShippingMethod::find($this->shippingMethod)->id,
        ];
        $order = null;
        // Example: Save order to database (assuming Order model exists)
        try {
            $order = Order::create($orderData);
        } catch (Throwable $th) {
            throw $th;
        }

        foreach ($cart->items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product->id,
                'product_variation_id' => null,
                'tax_class' => 27,
                'subtotal' => $item->product->net_retail_price * $item->quantity,
                'subtotal_tax' => $item->product->net_retail_price * $item->quantity * 0.27, // Example tax calculation
                'total' => $item->product->net_retail_price * $item->quantity * 1.27, // Example total with tax
                'total_tax' => $item->product->net_retail_price * $item->quantity * 0.27, // Example tax calculation
                'quantity' => $item->quantity,
            ]);
        }

        // Send emails after successful order creation
        try {
            // Send confirmation email to customer
            Mail::to($this->billingEmail)->send(new OrderConfirmationCustomer($order));

            // Send notification email to admin
            $adminEmail = config('mail.admin_email', 'admin@hungarogumi.hu');
            Mail::to($adminEmail)->send(new OrderNotificationAdmin($order));

        } catch (Exception $e) {
            // Log email sending error but don't fail the checkout
            Log::error('Failed to send order emails: '.$e->getMessage());
            session()->flash('error', $e->getMessage());
        }

        // Optionally, clear the cart
        $cartService->clearCart();

        // Redirect or emit event
        session()->flash('success', 'Order placed successfully!');

        return redirect()->route('checkout.success', ['order' => $order->id]);
    }

    public function render()
    {
        $cartService = app(CartService::class);

        return view('livewire.checkout', ['cart' => $cartService->getCart()]);
    }
}
