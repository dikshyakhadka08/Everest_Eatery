<?php

namespace Database\Factories;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
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
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'guest' => $this->faker->numberBetween(1, 10),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'message' => $this->faker->sentence,
        ];
    }
}
