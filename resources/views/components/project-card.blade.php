<!-- components/project-card.blade.php -->
@props([
    'title' => 'Project Title',
    'owner' => 'Project Owner',
    'status' => 'Status',
    'dueDate' => 'Due Date',
    'progress' => '0%',
    'tasksCompleted' => '0',
    'totalTasks' => '0',
    'lead' => 'Team Lead',
    'members' => '0'
])

<div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow border border-purple-50">
    <div class="flex items-center justify-between mb-3">
        <div>
            <h3 class="font-semibold text-lg">{{ $title }}</h3>
            <p class="text-sm text-gray-500">Owner: {{ $owner }}</p>
        </div>
        <span class="px-2 py-1 text-sm bg-purple-100 text-purple-600 rounded-full">{{ $status }}</span>
    </div>
    <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
        <span>Due: {{ $dueDate }}</span>
        <span>{{ $tasksCompleted }}/{{ $totalTasks }} tasks</span>
    </div>
    <div class="w-full h-2 bg-gray-200 rounded-full">
        <div class="h-2 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full" style="width: {{ $progress }}"></div>
    </div>
    <div class="mt-3 flex items-center justify-between text-sm text-gray-500">
        <span>Lead: {{ $lead }}</span>
        <span>{{ $members }} members</span>
    </div>
</div>
