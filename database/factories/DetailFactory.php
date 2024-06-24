<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'city' => fake()->city(),
            'roll' => fake()->unique()->numberBetween(0,100),
            'card' => fake()->unique()->numberBetween(100,200),
            // 'student_id' => fake()->numberBetween(0,10),
        ];
    }
}
