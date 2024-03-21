<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Image' => 'default.jpg', // Replace with actual image file or use Faker's imageUrl for placeholder
            'Items' => $this->faker->word,
            'Category' => $this->faker->randomElement(['Starter', 'Main Course', 'Dessert']),
            'Price' => $this->faker->randomFloat(2, 5, 50), // Price range between 5 and 50
            'Details' => $this->faker->sentence,
            // Add more fields as needed
        ];
    }
}
