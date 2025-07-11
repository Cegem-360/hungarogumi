<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Manufacturer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
final class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_name' => $this->faker->words(3, true),
            'sku' => $this->faker->unique()->regexify('[A-Z0-9]{8}'),
            'net_wholesale_price' => $this->faker->numberBetween(10000, 100000),
            'manufacturer_id' => Manufacturer::factory(), // Assuming there's at least one manufacturer
            'width' => $this->faker->numberBetween(185, 245),
            'aspect_ratio' => $this->faker->randomElement([45, 50, 55, 60, 65]),
            'diameter' => $this->faker->randomElement([14, 15, 16, 17, 18, 19, 20]),
            'season' => $this->faker->randomElement(['summer', 'winter', 'all-season']),
            'all_quantity' => $this->faker->numberBetween(0, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
