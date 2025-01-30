<!-- components/task-list.blade.php -->
<table class="w-full">
    <thead>
        <tr class="text-left text-sm text-gray-600 border-b">
            <th class="pb-3">Task</th>
            <th class="pb-3">Status</th>
            <th class="pb-3">Priority</th>
            <th class="pb-3">Due Date</th>
            <th class="pb-3">Assignee</th>
        </tr>
    </thead>
    <tbody>
        <!-- Task 1 -->
        <tr class="hover:bg-gray-50 border-b">
            <td class="py-3">Homepage Design</td>
            <td>
                <span class="px-2 py-1 rounded-full text-xs bg-gray-100 text-gray-600">
                    Todo
                </span>
            </td>
            <td>
                <span class="px-2 py-1 rounded-full text-xs bg-pink-100 text-pink-600">
                    High
                </span>
            </td>
            <td>Dec 10, 2023</td>
            <td>
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-full bg-purple-500 text-white flex items-center justify-center text-xs">
                        E
                    </div>
                    Emma Wilson
                </div>
            </td>
        </tr>

        <!-- Task 2 -->
        <tr class="hover:bg-gray-50 border-b">
            <td class="py-3">API Integration</td>
            <td>
                <span class="px-2 py-1 rounded-full text-xs bg-blue-100 text-blue-600">
                    In Progress
                </span>
            </td>
            <td>
                <span class="px-2 py-1 rounded-full text-xs bg-yellow-100 text-yellow-600">
                    Medium
                </span>
            </td>
            <td>Dec 12, 2023</td>
            <td>
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-full bg-purple-500 text-white flex items-center justify-center text-xs">
                        M
                    </div>
                    Mike Chen
                </div>
            </td>
        </tr>

        <!-- Task 3 -->
        <tr class="hover:bg-gray-50 border-b last:border-0">
            <td class="py-3">User Testing</td>
            <td>
                <span class="px-2 py-1 rounded-full text-xs bg-purple-100 text-purple-600">
                    Review
                </span>
            </td>
            <td>
                <span class="px-2 py-1 rounded-full text-xs bg-gray-100 text-gray-600">
                    Low
                </span>
            </td>
            <td>Dec 15, 2023</td>
            <td>
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-full bg-purple-500 text-white flex items-center justify-center text-xs">
                        S
                    </div>
                    Sarah Johnson
                </div>
            </td>
        </tr>

        <!-- Task 4 -->
        <tr class="hover:bg-gray-50 border-b last:border-0">
            <td class="py-3">Database Migration</td>
            <td>
                <span class="px-2 py-1 rounded-full text-xs bg-green-100 text-green-600">
                    Done
                </span>
            </td>
            <td>
                <span class="px-2 py-1 rounded-full text-xs bg-yellow-100 text-yellow-600">
                    Medium
                </span>
            </td>
            <td>Dec 8, 2023</td>
            <td>
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-full bg-purple-500 text-white flex items-center justify-center text-xs">
                        J
                    </div>
                    John Doe
                </div>
            </td>
        </tr>
    </tbody>
</table>
