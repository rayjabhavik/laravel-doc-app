<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randomBoolean = $this->faker->boolean; 
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'status' => (int)$randomBoolean,
            'created_at' => now(),
            'updated_at' => now()
            
        ];
    }
}

