<?php

namespace Database\Seeders;

use App\Models\ActivityLog;
use App\Models\Attachment;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\Project;
use App\Models\Reminder;
use App\Models\Task;
use App\Models\TaskUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();
        Project::factory(3)->create();
        Task::factory(70)->create();
        TaskUser::factory(200)->create();
        Comment::factory(200)->create();
        Attachment::factory(28)->create();
        Notification::factory(10)->create();
        Reminder::factory(70)->create();
        ActivityLog::factory(100)->create();
    }
}
