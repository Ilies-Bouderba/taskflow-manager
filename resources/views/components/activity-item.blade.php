<!-- components/activity-item.blade.php -->
@props([
    'user' => 'System',
    'action' => 'performed action',
    'target' => '',
    'time' => 'Just now'
])

<div class="flex items-start">
    <div class="w-8 h-8 mt-1 mr-3 bg-purple-100 rounded-full flex items-center justify-center">
        <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            @if($action === 'completed task')
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            @else
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            @endif
        </svg>
    </div>
    <div>
        <p class="text-sm">
            <span class="font-medium">{{ $user }}</span>
            {{ $action }}
            @if($target)
            <span class="text-purple-600">"{{ $target }}"</span>
            @endif
        </p>
        <p class="text-xs text-gray-500 mt-1">{{ $time }}</p>
    </div>
</div>
