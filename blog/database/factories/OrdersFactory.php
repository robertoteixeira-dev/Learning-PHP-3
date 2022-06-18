<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Customers;
use \App\Models\Products;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_id' => Customers::factory(),
            'item_count' => $this->faker->randomNumber(1, 100),
            'sub_total' => Products::factory('unit_price'),
            'shipping' => 3.99,
            'taxes' => 0.10,
            'grand_total' => Products::factory('unit_price'),
            'placed_at' => now(),
        ];
    }
}
