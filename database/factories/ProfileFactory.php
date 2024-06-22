<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

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
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'suffix' => $this->faker->randomElement(['Jr.', 'Sr.', 'III']),
            'birthdate' => $this->faker->date(),
            'birthplace' => $this->faker->city(),
            'registry_no' => $this->faker->numberBetween(10000, 99999),
            'page_no' => $this->faker->numberBetween(1000, 9999),
            'book' => $this->faker->word(),
            'mother_name' => $this->faker->name('female'),
            'father_name' => $this->faker->name('male'),
            'is_married' => $this->faker->numberBetween(0, 1),
            'm_date' => $this->faker->date(),
            'm_place' => $this->faker->word(),
        ];
    }
}
