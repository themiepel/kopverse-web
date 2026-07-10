<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'username' => fake()->unique()->userName(),

            'email' => fake()->unique()->safeEmail(),

            'email_verified_at' => now(),

            'password' => '123456',

            'remember_token' => Str::random(10),
        ];
    }
}
