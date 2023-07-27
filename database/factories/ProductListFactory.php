<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductList>
 */
class ProductListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->company(),
            'price' => fake()->numberBetween(10,1000),
            'special_price' => fake()->numberBetween(1,700),
            'image' => fake()->imageUrl(),
            'category' => fake()->randomElement(['Mobiles', 'Laptops', 'Electronics']),
            'subcategory' => fake()->randomElement(['Video Games' , 'Apple' , 'Samsung' ,'Lenovo']),
            'remark' => fake()->randomElement(['Featured', 'new_arrival' , 'Collection']),
            'brand' => fake()->randomElement(['Apple' , 'Samsung' ,'Lenovo','Sony']),
            'star' => fake()->numberBetween(1,5),
            'product_code' => fake()->numberBetween(1,100000),

        ];
    }
}
