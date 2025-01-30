<!-- components/task-row.blade.php -->
@props([
    'title' => 'Task Title',
    'status' => 'todo',
    'priority' => 'medium',
    'dueDate' => 'No due date',
    'assignee' => 'Unassigned',
    'assigneeInitial' => null
])

<tr class="hover:bg-gray-50 border-b last:border-0">
    <td class="py-3">{{ $title }}</td>
    <td>
        <span @class([
            'status-badge px-2 py-1 rounded-full text-xs',
            'bg-gray-100 text-gray-600' => $status === 'todo',
            'bg-blue-100 text-blue-600' => $status === 'in_progress',
            'bg-purple-100 text-purple-600' => $status === 'review',
            'bg-green-100 text-green-600' => $status === 'done'
        ])>
            {{ ucfirst(str_replace('_', ' ', $status)) }}
        </span>
    </td>
    <td>
        <span @class([
            'priority-badge px-2 py-1 rounded-full text-xs',
            'bg-pink-100 text-pink-600' => $priority === 'high',
            'bg-yellow-100 text-yellow-600' => $priority === 'medium',
            'bg-gray-100 text-gray-600' => $priority === 'low'
        ])>
            {{ ucfirst($priority) }}
        </span>
    </td>
    <td>{{ $dueDate }}</td>
    <td>
        <div class="flex items-center gap-2">
            @if($assigneeInitial)
            <div class="w-6 h-6 rounded-full bg-purple-500 text-white flex items-center justify-center text-xs">
                {{ strtoupper(substr($assigneeInitial, 0, 1)) }}
            </div>
            @endif
            {{ $assignee }}
        </div>
    </td>
</tr>
