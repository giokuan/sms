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
            
            // 'lrn' => fake()->numberBetween(00000000, 99999999),
            // 'age' => fake()->numberBetween(14, 16),
            'gender' => fake()->randomElement(['male', 'female']),
            'dateofbirth' => fake()->dateTimeBetween('-16 years', '-12 years'),
            'grade' => 10,
            // 'section' => 'A',

            'email' => fake()->unique()->freeEmail(),
            'photo' => fake()->image(),
            'religion' => fake()->randomElement(['Theist', 'Atheist', 'Agnostic']),
            'nationality' => "Philippines",

            'fathersname' => fake()->name(),
            'mothersname' => fake()->name(),
            'foccupation' => fake()->jobTitle(),
            'moccupation' => fake()->jobTitle(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
        ];
    }
}
