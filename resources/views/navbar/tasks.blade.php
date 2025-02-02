<x-header>task</x-header>
<x-nav></x-nav>

<main class="pt-8 pb-8 px-4" x-data="{ view: 'board' }">
    <div class="max-w-7xl mx-auto">
        <!-- Projects Section -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Active Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Website Redesign Project -->
                <div class="bg-white p-4 rounded-xl shadow-sm border border-purple-50">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-semibold text-lg">Website Redesign</h3>
                        <span class="px-2 py-1 text-sm bg-purple-100 text-purple-600 rounded-full">Active</span>
                    </div>
                    <div class="mb-4">
                        <div class="flex justify-between text-sm mb-1">
                            <span>Progress</span>
                            <span>67%</span>
                        </div>
                        <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full bg-purple-600 w-2/3"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-sm text-gray-600">
                        <div class="flex items-center gap-2">
                            <div class="flex -space-x-2">
                                <span
                                    class="bg-purple-100 text-purple-600 rounded-full w-6 h-6 flex items-center justify-center">S</span>
                                <span
                                    class="bg-purple-100 text-purple-600 rounded-full w-6 h-6 flex items-center justify-center">M</span>
                            </div>
                            <span>3 members</span>
                        </div>
                        <span>Dec 15, 2023</span>
                    </div>
                </div>

                <!-- Mobile App Project -->
                <div class="bg-white p-4 rounded-xl shadow-sm border border-purple-50">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-semibold text-lg">Mobile App</h3>
                        <span class="px-2 py-1 text-sm bg-purple-100 text-purple-600 rounded-full">Active</span>
                    </div>
                    <div class="mb-4">
                        <div class="flex justify-between text-sm mb-1">
                            <span>Progress</span>
                            <span>53%</span>
                        </div>
                        <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full bg-purple-600 w-1/2"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-sm text-gray-600">
                        <div class="flex items-center gap-2">
                            <div class="flex -space-x-2">
                                <span
                                    class="bg-purple-100 text-purple-600 rounded-full w-6 h-6 flex items-center justify-center">M</span>
                                <span
                                    class="bg-purple-100 text-purple-600 rounded-full w-6 h-6 flex items-center justify-center">E</span>
                            </div>
                            <span>2 members</span>
                        </div>
                        <span>Jan 20, 2024</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Task Board -->
        <div class="bg-white rounded-xl shadow-sm p-4">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                <h2 class="text-xl font-bold text-gray-900">Task Board</h2>
                <div class="flex items-center gap-3">
                    <div class="flex border rounded-lg p-1 bg-gray-50">
                        <button @click="view = 'board'" :class="view === 'board' ? 'bg-white shadow-sm' : ''"
                            class="px-3 py-1 rounded-md text-sm">
                            Board
                        </button>
                        <button @click="view = 'list'" :class="view === 'list' ? 'bg-white shadow-sm' : ''"
                            class="px-3 py-1 rounded-md text-sm">
                            List
                        </button>
                    </div>
                </div>
            </div>

            <!-- Board View -->
            <div x-show="view === 'board'">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <!-- Todo Column -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-semibold mb-4">To Do (2)</h4>
                        <div class="space-y-4">

                        <x-task-card title="Homepage Design" priority="high" assignee="Emma Wilson
                            assignee-initial="E" />

                        <x-task-card title="Homepage Design" priority="high" assignee="Emma Wilson"
                            assignee-initial="E" />
                        </div>
                    </div>

                    <!-- In Progress Column -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-semibold mb-4">In Progress (1)</h4>
                        <div class="space-y-4">

                        <x-task-card title="Homepage Design" priority="high" assignee="Emma Wilson"
                            assignee-initial="E" />
                        </div>
                    </div>

                    <!-- Review Column -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-semibold mb-4">Review (1)</h4>
                        <div class="space-y-4">

                        <x-task-card title="Homepage Design" priority="high" assignee="Emma Wilson"
                            assignee-initial="E" />
                        </div>
                    </div>

                    <!-- Done Column -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="font-semibold mb-4">Done (2)</h4>
                        <div class="space-y-4">
                            <x-task-card title="Project Setup" status="done" assignee="Mike Chen"
                                assigneeInitial="M" :showChat="true" />
                            <x-task-card title="Project Setup" status="done" assignee="Mike Chen"
                                assigneeInitial="M" :showChat="true" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- List View -->
            <div x-show="view === 'list'" class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-left text-sm text-gray-600 border-b">
                            <th class="pb-3 px-4">Task</th>
                            <th class="pb-3 px-4">Status</th>
                            <th class="pb-3 px-4">Priority</th>
                            <th class="pb-3 px-4">Due Date</th>
                            <th class="pb-3 px-4">Assignee</th>
                            <th class="pb-3 px-4">Chat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-4">Homepage Design</td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-sm bg-yellow-100 text-yellow-600 rounded-full">Todo</span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-sm bg-red-100 text-red-600 rounded-full">High</span>
                            </td>
                            <td class="py-3 px-4">Dec 10, 2023</td>
                            <td class="py-3 px-4 flex items-center gap-2">
                                <span
                                    class="bg-purple-100 text-purple-600 rounded-full w-6 h-6 flex items-center justify-center">E</span>
                                Emma Wilson
                            </td>
                            <td class="py-3 px-4">
                                <a href="#" class="text-purple-600 hover:text-purple-700">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <!-- Completed Task -->
                        <tr class="border-b hover:bg-gray-50 opacity-50">
                            <td class="py-3 px-4 line-through">Project Setup</td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-sm bg-green-100 text-green-600 rounded-full">Done</span>
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-sm bg-gray-100 text-gray-600 rounded-full">Low</span>
                            </td>
                            <td class="py-3 px-4">Dec 1, 2023</td>
                            <td class="py-3 px-4 flex items-center gap-2">
                                <span
                                    class="bg-purple-100 text-purple-600 rounded-full w-6 h-6 flex items-center justify-center">M</span>
                                Mike Chen
                            </td>
                            <td class="py-3 px-4">
                                <a href="#" class="text-gray-400 hover:text-purple-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<x-footer></x-footer>
