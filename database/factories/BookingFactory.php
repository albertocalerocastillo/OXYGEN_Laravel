<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Room; // Asegúrate de importar el modelo Room
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid(),
            'guest' => $this->faker->name(),
            'orderDate' => $this->faker->date(),
            'checkInDate' => $this->faker->date(),
            'checkInTime' => $this->faker->time(),
            'checkOutDate' => $this->faker->date(),
            'checkOutTime' => $this->faker->time(),
            'specialRequest' => $this->faker->sentence(),
            'roomId' => Room::inRandomOrder()->first()->id ?? $this->faker->uuid(),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled', 'completed']),
            'specialRequestType' => $this->faker->randomElement(['dietary', 'accessibility', 'other']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}