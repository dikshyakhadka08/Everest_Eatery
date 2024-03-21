<?php

namespace Database\Factories;

use App\Models\FoodOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodOrderFactory extends Factory
{
    protected $model = FoodOrder::class;

    public function definition()
    {
        return [
            'foodname' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 5, 50), // Assuming a price range between 5 and 50
            'username' => $this->faker->name,
            'quantity' => $this->faker->numberBetween(1, 5),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
        ];
    }
}
