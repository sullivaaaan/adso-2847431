<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pet>
 */
class petFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kind = fake()->randomElements(['dog', 'cat', 'pig','rodent','fish']);
        return [
            'name' => fake()->domainWord(),
            'kind'=> implode ($kind), 
            'weight'=> fake()->randomnumber(1, 80),
            'age'=> fake()->randomnumber(2, true),
            'breed'=>fake()-> colorName(),
            'location'=> fake()->city(),
            'description'=> fake()->sentence(10),
            'created_at'=> now()
        ];
    }
}
