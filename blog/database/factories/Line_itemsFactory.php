<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Orders;
use \App\Models\Products;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Line_items>
 */
class Line_itemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'order_id' => Orders::factory('id'),
            'product_id' => Products::factory('id'),
            'quantity' => 1,
            'unit_price' => $this->faker->randomFloat(2, 0, 1000),
            'item_total' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
