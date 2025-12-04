<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory(10)->create()->each(function ($order) {

            OrderItem::factory(2)->create([
                'order_id' => $order->id,
            ]);

            $totalPrice = 0;

            foreach ($order->orderItems as $item) {
                $totalPrice += $item->quantity * $item->price_at_moment;
            }

            $order->update(['total_price' => $totalPrice]);
        });

    }
}
