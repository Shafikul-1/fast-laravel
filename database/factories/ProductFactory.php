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
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'price' => fake()->numberBetween(),
            'discount' => fake()->randomFloat(20, 400, 123, 500),
            'color' => fake()->colorName(),
            'uniqueId' =>fake()->uuid(),
            'image' =>fake()->imageUrl(640, 640, 'animale', true,null, null, 'png'),
            'description' =>fake()->text()
        ];
    }
}
