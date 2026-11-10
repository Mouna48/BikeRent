<?php

namespace Database\Factories;

use App\Models\Bike;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Bike>
 */
class BikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'serial_number' => strtoupper(fake()->unique()->bothify('BK-#####??')),
        'model' => fake()->randomElement(['Urbana', 'Montaña', 'Eléctrica']),
        'price_per_hour' => fake()->randomFloat(2, 2, 15),
        'status' => 'available',
        ];
    }
}
