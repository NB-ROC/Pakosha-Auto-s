<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::inRandomOrder()->first();

        $quantity = fake()->numberBetween(1, 3);

        return [
            'order_id' => null,
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price_at_moment' => $product->price,
        ];
    }
}
