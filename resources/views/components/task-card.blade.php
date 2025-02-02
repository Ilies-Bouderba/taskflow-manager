@props([
    'title' => 'Task Title',
    'priority' => 'medium',
    'assignee' => 'Unassigned',
    'dueDate' => '2014-09-12',
    'assigneeInitial' => null,
    'showChat' => true,
    'status' => 'todo',
    'showDetails' => true,
])

<div @class([
    'bg-white p-4 rounded-lg shadow border border-gray-200 hover:shadow-md transition-all group',
    'opacity-50' => $status === 'done',
])>
    <div class="flex justify-between items-start mb-2">
        <div class="pr-2">
            <span @class(['font-medium', 'line-through' => $status === 'done'])>
                {{ $title }}
            </span>
        </div>

        <!-- Priority/Status Indicator -->
        @if ($status === 'done')
            <span class="py-1 text-green-600 text-sm">✓</span>
        @else
            <span @class([
                'text-sm px-2 py-1 rounded-full',
                'bg-red-100 text-red-600' => $priority === 'high',
                'bg-yellow-100 text-yellow-600' => $priority === 'medium',
                'bg-blue-100 text-blue-600' => $priority === 'low',
            ])>
                {{ ucfirst($priority) }}
            </span>
        @endif
    </div>

    <p class="text-sm text-gray-500 mb-3">
        @if ($status === 'done')
            Completed: {{ Carbon\Carbon::parse($dueDate)->format('M d') }}
        @else
            Due: {{ Carbon\Carbon::parse($dueDate)->format('M d') }}
        @endif
    </p>

    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            @if($assigneeInitial)
            <div class="flex items-center gap-2">
                <div class="w-6 h-6 rounded-full bg-purple-500 text-white flex items-center justify-center text-xs">
                    G
                    {{-- for the done card --}}
                </div>
                <span class="text-sm">{{ $assignee }}</span>
            </div>
            @else
            <div class="w-6 h-6 rounded-full bg-purple-500 text-white flex items-center justify-center text-xs">
                H
            </div>
            <span class="text-sm">{{ $assignee }}</span>
            @endif
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center gap-2">
            @if ($showChat)
                <button class="text-gray-400 hover:text-purple-600" title="Chat">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </button>
            @endif

            @if ($showDetails)
                <a href="#" class="text-gray-400 hover:text-purple-600" title="View Details">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </a>
            @endif
        </div>
    </div>
</div>
