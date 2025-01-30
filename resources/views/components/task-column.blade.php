<!-- components/task-column.blade.php -->
@props(['status' => 'Todo', 'count' => 0])

<div class="bg-gray-50 p-3 rounded-lg">
    <div class="flex items-center justify-between mb-4">
        <h3 class="font-semibold text-gray-700">{{ $status }} ({{ $count }})</h3>
    </div>
    <div class="space-y-3">
        {{ $slot }}
    </div>
</div>
