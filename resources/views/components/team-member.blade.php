<!-- components/team-member.blade.php -->
@props([
    'name' => 'Team Member',
    'role' => 'Team Role',
    'initial' => null
])

<div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded">
    <div class="flex items-center gap-3">
        <div class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-400 to-pink-400 flex items-center justify-center text-white">
            {{ $initial ?? strtoupper(substr($name, 0, 1)) }}
        </div>
        <div>
            <p class="font-medium">{{ $name }}</p>
            <p class="text-sm text-gray-500">{{ $role }}</p>
        </div>
    </div>
    <span class="text-sm text-purple-600">{{ $role === 'Project Owner' ? 'Owner' : 'Member' }}</span>
</div>
