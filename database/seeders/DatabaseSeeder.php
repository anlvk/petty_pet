<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        foreach(range(0, 10) as $user) {
            User::factory()->create([
            'name' => "User $user",
            'email' => "test$user@example.com",
        ]);
        }
    }
}
