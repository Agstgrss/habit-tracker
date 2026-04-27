<?php

namespace Database\Factories;

use App\Models\Habit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits = ['Exercise', 'Read', 'Meditate', 'Drink Water', 'Sleep Early'];    

        return [
            'name' => $this->faker->unique()->randomElement($habits),
            'user_id' => 1,
        ];
    }
}
