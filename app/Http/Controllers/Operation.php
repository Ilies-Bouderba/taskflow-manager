<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Operation extends Controller
{
    public function showDashboard()
    {
        return view('navbar.dashboard');
    }

    public function showProjects()
    {
        return view('navbar.projects', []);
    }

    public function getProgressAttribute($tasks)
    {
        if ($tasks->count() === 0) {
            return 0;
        }

        $totalProgress = $tasks->sum('progress');
        return round($totalProgress / $tasks->count(), 2);
    }

    public function ShowProject($id)
    {
        $project = Project::with(['admin', 'tasks.users', 'chat.user'])->find($id);

        if (!$project) {
            abort(404, 'Project not found');
        }

        $isOwner = Auth::user()->id === $project->admin->id;
        $isMember = $project->tasks()->whereHas('users', function ($query) {
            $query->where('users.id', Auth::id());
        })->exists();

        if (!$isOwner && !$isMember) {
            abort(403, 'Unauthorized');
        }

        return view('project.index', [
            'project' => $project,
            'admin' => $project->admin,
            'ToDo' => $project->tasks()
                ->where('status', 'To Do')
                ->paginate(3, ['*'], 'todo_page')
                ->setPageName('todo_page'),

            'Progress' => $project->tasks()
                ->where('status', 'In Progress')
                ->paginate(3, ['*'], 'progress_page')
                ->setPageName('progress_page'),

            'Done' => $project->tasks()
                ->where('status', 'Done')
                ->paginate(3, ['*'], 'done_page')
                ->setPageName('done_page'),

            'taskMemberCount' => User::whereHas('tasks', fn($q) => $q->where('project_id', $id))->count(),

            'ProjectProgress' => $project->progress,

            'teamMembers' => User::whereHas('tasks', fn($q) => $q->where('project_id', $id))
                ->distinct()
                ->paginate(5, ['*'], 'team_page')
                ->setPageName('team_page'),

            'messages' => $project->chat()
                ->with('user')
                ->orderBy('created_at', 'desc')
                ->paginate(15, ['*'], 'chat_page')
                ->setPageName('chat_page')
        ]);
    }


    public function showTasks()
    {
        return view("navbar.tasks");
    }

    public function showTask()
    {
        return view('task.index');
    }


    public function storeMessage(Request $request, Project $project)
    {
        $request->validate(['message' => 'required|string|max:500']);

        $message = $project->chat()->create([
            'user_id' => Auth::id(),
            'message' => strip_tags($request->message)
        ]);

        return response()->json($message->load('user'));
    }
}
