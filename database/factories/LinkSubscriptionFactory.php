<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LinkSubscription>
 */
class LinkSubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subscription_id' => \App\Models\Subscription::inRandomOrder()->value('id'),
            'member_id' => \App\Models\Member::inRandomOrder()->value('id')
        ];
    }
}
