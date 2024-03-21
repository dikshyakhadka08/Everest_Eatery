<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customerId' => $this->faker->numberBetween(10, 30), // Random number between 10 and 100
            'foodId' => $this->faker->numberBetween(10, 30), // Random number between 10 and 100
            'quantity' => $this->faker->numberBetween(1, 5),
        ];
    }
}
