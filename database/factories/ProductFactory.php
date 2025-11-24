<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands = ['Bosch', 'Castrol', 'Philips', 'Michelin', 'Liqui Moly'];

        $products = [
            'Remschijven',
            'Motorolie 5W-30',
            'H7 Halogeenlamp',
            'Luchtfilter',
            'Bougies',
            'Ruitenwissers',
            'Uitlaat Einddemper',
            'Koppeling Set',
        ];

        $brand = $this->faker->randomElement($brands);
        $product = $this->faker->randomElement($products);

        return [
            'name' => $brand . ' ' . $product,
            'description' => fake()->sentence(10),
            'price' => fake()->randomFloat(2, 9.99, 499.99),
            'category_id' => fake()->numberBetween(1, 8),
            'image' => 'coming soon',
        ];
    }
}
