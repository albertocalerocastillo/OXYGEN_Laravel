<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activity::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon']),
            'user_id' => User::factory(),
            'datetime' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'paid' => $this->faker->boolean(),
            'notes' => $this->faker->sentence(),
            'satisfaction' => $this->faker->numberBetween(0, 10),
        ];
    }
}