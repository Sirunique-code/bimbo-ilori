<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Clear the users table before seeding to avoid duplicate entries
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // Disable foreign key constraints
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // Enable foreign key constraints

        // Create a test user only if it doesn't already exist
        User::firstOrCreate([
            'email' => 'test@example.com',
        ], [
            'name' => 'Test User',
            'password' => bcrypt('password'), // Set a default password
        ]);
    }
}
