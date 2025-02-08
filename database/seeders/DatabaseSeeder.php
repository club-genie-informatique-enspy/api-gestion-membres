<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(
            [
                RoleSeeder::class,
                OrganizationSeeder::class,
                DepartmentSeeder::class,
                UserSeeder::class,
                MemberSeeder::class,
                SubscriptionSeeder::class,
                MeetingSeeder::class,
                LinkSubscriptionSeeder::class,
                LinkMeetingSeeder::class
            ]
            );

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
