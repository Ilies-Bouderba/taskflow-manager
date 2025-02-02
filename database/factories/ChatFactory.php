<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chat>
 */
class ChatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::inRandomOrder("id")->first()->id,
            "message" => $this->faker->sentence,
            "project_id" => Project::inRandomOrder("id")->first()->id,
            'task_id' => $this->faker->boolean() ? Task::inRandomOrder()->first()?->id : null,
        ];
    }
}
