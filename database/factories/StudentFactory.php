<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lastname' => fake()->firstName(),
            'firstname' => fake()->lastName(),
            'middlename' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'grade' => fake()->buildingNumber(),
            'photo' => fake()->image(),
            'gender' => fake()->randomElement(['male', 'female']),
            'religion' => fake()->randomElement(['Theist', 'Atheist', 'Agnostic']),
            'dateofbirth' => fake()->dateTime(),
            'fathersname' => fake()->name(),
            'mothersname' => fake()->name(),
            'foccupation' => fake()->jobTitle(),
            'moccupation' => fake()->jobTitle(),
            'phone' => fake()->phoneNumber(),
            'nationality' => fake()->country(),
            'address' => fake()->address(),
        ];
    }
}
