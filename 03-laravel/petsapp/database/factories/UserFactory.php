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
                'document' => fake()->randomNumber(8, true),
                'gender' => fake()->randomElement(['Male', 'Female']),
                'fullname' => function ($attributes) {
                    return $attributes['gender'] === 'Male' ? fake()->firstNameMale() . ' ' . fake()->lastName() : fake()->firstNameFemale() . ' ' . fake()->lastName();
                },
                'birthdate' => fake()->dateTimeBetween('1974-01-01', '2004-12-31')->format('Y-m-d'), // Entre 1974 y 2004
                'photo' => function ($attributes) {
                    return $attributes['gender'] === 'Male'
                        ? 'https://avatar.iran.liara.run/public/boy' . fake()->numberBetween(1, 99) . '.jpg'
                        : 'https://avatar.iran.liara.run/public/girl' . fake()->numberBetween(1, 99) . '.jpg';
                },
                'phone' => fake()->numerify('300#######'),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => fake()->optional()->dateTime(),
                'password' => bcrypt('1234'), // Contraseña fija en 1234
                'role' => fake()->randomElement(['Admin', 'User', 'Moderator']),
                'remember_token' => fake()->uuid(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
            
            
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
