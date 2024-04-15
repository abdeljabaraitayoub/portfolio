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
            '_id' => "1", // 'id' => 1, // 'id' => 1, // 'id' => 1,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),

        ]);

        \App\Models\Project::factory()->create([
            '_id' => "1",
            'name' => 'Test Project',
            'description' => 'This is a test project',
            'start_date' => '2021-01-01',
            'end_date' => '2021-12-31',
            'user_id' => "1",
        ]);
        \App\Models\Formation::factory()->create([
            '_id' => "1",
            'name' => 'Test Formation',
            'description' => 'This is a test formation',
            'start_date' => '2021-01-01',
            'end_date' => '2021-12-31',
            'user_id' => "1",
        ]);
        // \App\Models\User::factory(0)->create();
        \App\Models\Project::factory(20)->create();
        \App\Models\Formation::factory(20)->create();
    }
}
