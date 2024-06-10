<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(5),
            'publisher' => fake()->sentence(),
            'genre' => fake()->randomElement(['fiction', 'non-fiction', 'self-help']),
            'publication_date' => fake()->date(),
            'word_count' => fake()->numberBetween(50000, 200000),
            'price' => fake()->randomFloat(2, 10, 50),

        ];
    }
}
