<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attachment>
 */
class AttachmentFactory extends Factory
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
            "user_id" => User::inRandomOrder()->first()->id,
            "file_path" => $this->generateFakeFilePath(),
            "file_name" => $this->faker->name,
        ];
    }

    private function generateFakeFilePath(): string
    {
        return 'uploads/' . $this->faker->uuid . '.jpg';
    }
}
