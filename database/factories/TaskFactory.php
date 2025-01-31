<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence,
            "description" => $this->faker->text,
            "due_date" => $this->faker->date(),
            "status" => $this->faker->randomElement(["To Do", "In Progress", "Done"]),
            "priority" => $this->faker->randomElement(["low", "medium", "high"]),
            "project_id" => Project::inRandomOrder("id")->first()->id,
            "leader_id" => User::inRandomOrder("id")->first()->id,
            "progress" => $this->faker->randomNumber(3),
        ];
    }
}
