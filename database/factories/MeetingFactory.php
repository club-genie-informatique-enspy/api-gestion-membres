<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meeting>
 */
class MeetingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'label' => fake()->word(),
            'description' => fake()->word(),
            'date' => fake()->word(),
            'duration' => fake()->word(),
            'owner' => fake()->word(),
            'userId' => fake()->uuid()
        ];
    }
}
