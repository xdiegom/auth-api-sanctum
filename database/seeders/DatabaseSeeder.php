<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'demo@email.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test@example.com',
        ]);
    }
}
