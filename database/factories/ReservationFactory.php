<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Reservation>
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
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'reservation_time' => $this->faker->dateTimeBetween('+1 days', '+1 month'),
            'guests' => $this->faker->numberBetween(1, 20),
            'note' => $this->faker->optional()->sentence(),
        ];

        Reservation::factory()->count(10)->create();
    }
}
