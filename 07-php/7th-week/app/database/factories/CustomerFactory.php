<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->text(20),
            'email'=> fake()->unique()->safeEmail(),
            'address' =>fake()->text(255),
            'phonenumber' => fake()->text(15),
            'age' => fake()->numberBetween(18, 90),
            'gender'=>fake()->text(10),
            'password'=>fake()->text(10),
            'droptest'=>fake()->date(),
        ];
    }
}
