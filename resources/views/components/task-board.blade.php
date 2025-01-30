<!-- components/task-board.blade.php -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    <!-- Todo Column -->
    <div class="bg-gray-50 p-3 rounded-lg">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-semibold text-gray-700">Todo (2)</h3>
        </div>
        <div class="space-y-3">
            <div class="task-card">
                <div class="flex items-center justify-between mb-2">
                    <span class="font-medium">Homepage Design</span>
                    <span class="text-xs priority-badge high">High</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Lead: Emma Wilson</p>
                <div class="flex items-center justify-between text-xs text-gray-400">
                    <span>Due: Dec 10</span>
                    <div class="avatar-sm">E</div>
                </div>
            </div>
            <div class="task-card">
                <div class="flex items-center justify-between mb-2">
                    <span class="font-medium">Content Strategy</span>
                    <span class="text-xs priority-badge medium">Medium</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Lead: Mike Chen</p>
                <div class="flex items-center justify-between text-xs text-gray-400">
                    <span>Due: Dec 12</span>
                    <div class="avatar-sm">M</div>
                </div>
            </div>
        </div>
    </div>

    <!-- In Progress Column -->
    <div class="bg-gray-50 p-3 rounded-lg">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-semibold text-gray-700">In Progress (3)</h3>
        </div>
        <div class="space-y-3">
            <div class="task-card">
                <div class="flex items-center justify-between mb-2">
                    <span class="font-medium">API Integration</span>
                    <span class="text-xs priority-badge medium">Medium</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Lead: Mike Chen</p>
                <div class="flex items-center justify-between text-xs text-gray-400">
                    <span>Due: Dec 12</span>
                    <div class="avatar-sm">M</div>
                </div>
            </div>
            <div class="task-card">
                <div class="flex items-center justify-between mb-2">
                    <span class="font-medium">User Authentication</span>
                    <span class="text-xs priority-badge high">High</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Lead: Sarah Johnson</p>
                <div class="flex items-center justify-between text-xs text-gray-400">
                    <span>Due: Dec 14</span>
                    <div class="avatar-sm">S</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Review Column -->
    <div class="bg-gray-50 p-3 rounded-lg">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-semibold text-gray-700">Review (1)</h3>
        </div>
        <div class="space-y-3">
            <div class="task-card">
                <div class="flex items-center justify-between mb-2">
                    <span class="font-medium">Dashboard Layout</span>
                    <span class="text-xs priority-badge low">Low</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Lead: Emma Wilson</p>
                <div class="flex items-center justify-between text-xs text-gray-400">
                    <span>Due: Dec 15</span>
                    <div class="avatar-sm">E</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Done Column -->
    <div class="bg-gray-50 p-3 rounded-lg">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-semibold text-gray-700">Done (2)</h3>
        </div>
        <div class="space-y-3">
            <div class="task-card">
                <div class="flex items-center justify-between mb-2">
                    <span class="font-medium">Project Setup</span>
                    <span class="text-xs priority-badge low">Low</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Lead: Mike Chen</p>
                <div class="flex items-center justify-between text-xs text-gray-400">
                    <span>Due: Dec 5</span>
                    <div class="avatar-sm">M</div>
                </div>
            </div>
            <div class="task-card">
                <div class="flex items-center justify-between mb-2">
                    <span class="font-medium">Database Design</span>
                    <span class="text-xs priority-badge medium">Medium</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Lead: Sarah Johnson</p>
                <div class="flex items-center justify-between text-xs text-gray-400">
                    <span>Due: Dec 8</span>
                    <div class="avatar-sm">S</div>
                </div>
            </div>
        </div>
    </div>
</div>
