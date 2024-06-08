<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->sentence(),
            'middle_name' => fake()->sentence(),
            'last_name' => fake()->sentence(),
            'suffix' => fake()->randomElement(['jr', 'sr', 'III']),
            'birthdate' => fake()->date(),
            'birthplace' => fake()->sentence(),
            'registry_no' => fake()->numberBetween(10000, 99999),
            'page' => fake()->numberBetween(1000, 9999),
            'book' => fake()->sentence(),
            'mother_name' => fake()->sentence(),
            'father_name' => fake()->sentence(),
            'is_married' => fake()->randomElement(['yes', 'no']),
        ];
    }
}
