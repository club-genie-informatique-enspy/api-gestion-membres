<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'surname' => fake()->word(),
            'email' => fake()->word(),
            'phone' => fake()->word(),
            'dateOfBirth' => fake()->word(),
            'department_id' => \App\Models\Department::inRandomOrder()->value('id'),
            'level' => fake()->word(),
            'organization_id' => \App\Models\Organization::inRandomOrder()->value('id')
        ];
    }
}
