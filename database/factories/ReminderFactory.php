<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reminder>
 */
class ReminderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "task_id" => Task::inRandomOrder("id")->first()->id,
            "remind_at" => $this->faker->dateTimeBetween("now", "+3 days"),
            "message" => $this->faker->sentence,
        ];
    }
}
