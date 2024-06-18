<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user>
 */
class UserFactory extends Factory
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
            'email' => fake()->unique()->email(),
            'address' => fake()->address(),
            'age' => fake()->numberBetween(0 , 60),
            'phone' => fake()->randomNumber()
            // 'phone' => fake()->phoneNumber()
        ];
    }
}
