<!-- components/team-members.blade.php -->
@props([])

<div class="bg-white p-4 rounded-xl shadow-sm">
    <h3 class="text-lg font-semibold mb-4">Project Team</h3>
    <div class="space-y-3">
        {{ $slot }}
    </div>
</div>
