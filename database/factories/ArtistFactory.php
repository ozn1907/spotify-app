<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artists>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'album' => $this->faker->word,
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'), // Generates a random date in 'Y-m-d' format.
            'duration' => $this->faker->numberBetween(60, 600), // Assuming duration in seconds
        ];        
    }
}
