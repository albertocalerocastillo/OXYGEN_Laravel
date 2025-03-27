<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid(),
            'name' => $this->faker->unique()->word() . ' Room',
            'type' => $this->faker->randomElement(['single', 'double', 'suite', 'family']),
            'number' => $this->faker->unique()->randomNumber(3),
            'amenities' => $this->faker->words(5, true),
            'price' => $this->faker->randomFloat(2, 50, 300),
            'discount' => $this->faker->optional(0.3)->randomFloat(2, 5, 50),
            'offerPrice' => $this->faker->optional(0.2)->randomFloat(2, 40, 250),
            'photos' => $this->faker->imageUrl(640, 480, 'hotel', true),
            'status' => $this->faker->randomElement(['available', 'occupied', 'maintenance']),
            'description' => $this->faker->paragraph(),
            'offer' => $this->faker->optional(0.1)->sentence(),
            'cancellation' => $this->faker->paragraph(2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}