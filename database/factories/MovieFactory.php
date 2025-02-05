<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'thumbnail' => fake()->imageUrl(),
            'active' => fake()->boolean(),
            'description' => fake()->text(),
            'views' => fake()->randomNumber(1, 99),
            'comments' => fake()->randomNumber(1, 99),
            'votes' => fake()->randomNumber(1, 99),
        ];
    }
}
