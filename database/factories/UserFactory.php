<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(), // Random name
            'email' => fake()->unique()->safeEmail(), // Random unique email
            'email_verified_at' => now(), // Email verified timestamp
            'password' => static::$password ??= Hash::make('password'), // Default password
            'remember_token' => Str::random(10), // Random remember token
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null, // Set email as unverified
        ]);
    }

    /**
     * Indicate that the user is an admin.
     */
    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'name' => 'Admin User', // Custom admin name
            'email' => env('ADMIN_EMAIL', 'bimboilori.com'), // Admin email from .env or default
            'password' => Hash::make(env('ADMIN_PASSWORD', 'bimboilori2025')), // Admin password from .env or default
        ]);
    }
}