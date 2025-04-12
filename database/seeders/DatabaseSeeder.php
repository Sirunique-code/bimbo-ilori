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

        // Create or update the admin user
        User::updateOrCreate(
            [
                'email' => env('ADMIN_EMAIL', 'bimboilori@gmail.com'), // Admin email
            ],
            [
                'name' => 'Admin User',
                'password' => bcrypt(env('ADMIN_PASSWORD', 'bimbo2025')), // Admin password
            ]
        );


        // Call other seeders
        $this->call([
            CourseSeeder::class,
            BooksTableSeeder::class,
            QuoteSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}