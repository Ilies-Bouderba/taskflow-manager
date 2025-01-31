<!-- components/chat-item.blade.php -->
@props([
    'user' => 'User',
    'time' => 'Just now',
    'message' => '',
    'avatar' => null
])

<div class="flex items-start gap-3">
    <!-- Avatar -->
    <div class="shrink-0">
        <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center">
            <span class="text-purple-600 text-sm">
                {{ $avatar ?: substr($user, 0, 1) }}
            </span>
        </div>
    </div>

    <!-- Content -->
    <div class="flex-1">
        <div class="flex items-baseline gap-2">
            <span class="font-medium">{{ $user }}</span>
            <span class="text-xs text-gray-500">{{ $time }}</span>
        </div>
        <p class="text-gray-700 mt-1">{{ $message }}</p>
    </div>
</div>
