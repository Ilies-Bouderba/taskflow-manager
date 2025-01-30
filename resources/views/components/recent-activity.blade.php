<!-- components/recent-activity.blade.php -->
@props([])

<div class="bg-white p-4 rounded-xl shadow-sm">
    <h3 class="text-lg font-semibold mb-4">Recent Activity</h3>
    <div class="space-y-4">
        {{ $slot }}
    </div>
</div>
