<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ShippingMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ShippingMethod>
 */
final class ShippingMethodFactory extends Factory
{
    protected $model = ShippingMethod::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
            'title' => $this->faker->words(3, true),
            'slug' => $this->faker->slug(),
            'cost' => $this->faker->numberBetween(0, 5000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
