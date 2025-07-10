<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Order;
use App\Models\ShippingMethod;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
final class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'shipping_method_id' => ShippingMethod::factory(),
            'payment_method' => 'card',
            'payment_method_title' => 'Bankkártya',
            'set_paid' => false,
            'billing_name' => $this->faker->name(),
            'billing_address_1' => $this->faker->streetAddress(),
            'billing_city' => $this->faker->city(),
            'billing_postcode' => $this->faker->postcode(),
            'billing_country' => 'HU',
            'billing_email' => $this->faker->email(),
            'billing_phone' => $this->faker->phoneNumber(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
