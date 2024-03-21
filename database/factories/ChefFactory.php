<?php

namespace Database\Factories;

use App\Models\Chef;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChefFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'chefskill' => $this->faker->sentence,
            'image' => $this->faker->imageUrl('200', '200', 'food'), // Example size and category
            // Add more fields as needed
        ];
    }
}
