<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subTask>
 */
class subTaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "task_id" => Task::inRandomOrder()->first()->id,
            "title" =>  $this->faker->sentence,
            "completed" => $this->faker->boolean(50),
            "due_date" => $this->faker->dateTimeBetween(now(), "3 days"),
        ];
    }
}
