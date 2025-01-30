<!-- dashboard.blade.php -->
<x-header>TaskFlow Dashboard</x-header>
<x-nav />

<main class="pt-20 pb-8 px-4" x-data="{ view: 'board', filter: 'all' }">
    <div class="max-w-7xl mx-auto">
        <!-- Dashboard Header -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Project Dashboard</h1>
                <p class="text-gray-600 mt-1">Welcome back, Alex Developer!</p>
            </div>
            <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 flex items-center gap-2 shadow-sm hover:shadow-md transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                New Project
            </button>
        </div>

        <!-- Key Metrics -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-white p-4 rounded-xl shadow-sm border border-purple-50">
                <div class="text-2xl font-bold text-purple-600">4</div>
                <div class="text-sm text-gray-600">Active Projects</div>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-sm border border-purple-50">
                <div class="text-2xl font-bold text-pink-600">3</div>
                <div class="text-sm text-gray-600">Overdue Tasks</div>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-sm border border-purple-50">
                <div class="text-2xl font-bold text-gray-900">8</div>
                <div class="text-sm text-gray-600">Team Members</div>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-sm border border-purple-50">
                <div class="text-2xl font-bold text-green-500">72%</div>
                <div class="text-sm text-gray-600">Overall Progress</div>
            </div>
        </div>

        <!-- Active Projects -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
            <x-project-card
                title="Website Redesign"
                owner="Sarah Johnson"
                status="Development"
                due-date="Dec 15, 2023"
                progress="67%"
                tasks-completed="12"
                total-tasks="18"
                lead="Mike Chen"
                members="3"
            />
        </div>

        <!-- Task Board -->
        <div class="bg-white rounded-xl shadow-sm p-4 mb-8">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                <h2 class="text-xl font-bold text-gray-900">Task Board</h2>
                <div class="flex items-center gap-3">
                    <div class="flex border rounded-lg p-1 bg-gray-50">
                        <button @click="view = 'board'" :class="view === 'board' ? 'bg-white shadow-sm' : ''" class="px-3 py-1 rounded-md text-sm">
                            Board
                        </button>
                        <button @click="view = 'list'" :class="view === 'list' ? 'bg-white shadow-sm' : ''" class="px-3 py-1 rounded-md text-sm">
                            List
                        </button>
                    </div>
                </div>
            </div>

            <!-- Board View -->
            <div x-show="view === 'board'">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <x-task-column status="Todo" count="2">
                        <x-task-card
                            title="Homepage Design"
                            priority="high"
                            assignee="Emma Wilson"
                            due-date="Dec 10"
                            assignee-initial="E"
                        />
                        <x-task-card
                            title="Content Strategy"
                            priority="medium"
                            assignee="Mike Chen"
                            due-date="Dec 12"
                            assignee-initial="M"
                        />
                    </x-task-column>

                    <x-task-column status="In Progress" count="1">
                        <x-task-card
                            title="API Integration"
                            priority="medium"
                            assignee="Mike Chen"
                            due-date="Dec 12"
                            assignee-initial="M"
                        />
                    </x-task-column>

                    <x-task-column status="Review" count="1">
                        <x-task-card
                            title="Dashboard Design"
                            priority="low"
                            assignee="Sarah Johnson"
                            due-date="Dec 14"
                            assignee-initial="S"
                        />
                    </x-task-column>

                    <x-task-column status="Done" count="2">
                        <x-task-card
                            title="Project Setup"
                            priority="low"
                            assignee="Mike Chen"
                            due-date="Dec 5"
                            assignee-initial="M"
                        />
                        <x-task-card
                            title="Database Design"
                            priority="medium"
                            assignee="Sarah Johnson"
                            due-date="Dec 8"
                            assignee-initial="S"
                        />
                    </x-task-column>
                </div>
            </div>

            <!-- List View -->
            <div x-show="view === 'list'" class="overflow-x-auto">
                <x-task-list>
                    <x-task-row
                        title="Homepage Design"
                        status="todo"
                        priority="high"
                        due-date="Dec 10, 2023"
                        assignee="Emma Wilson"
                        assignee-initial="E"
                    />
                    <x-task-row
                        title="API Integration"
                        status="in_progress"
                        priority="medium"
                        due-date="Dec 12, 2023"
                        assignee="Mike Chen"
                        assignee-initial="M"
                    />
                </x-task-list>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white rounded-xl shadow-sm p-4">
            <h3 class="text-lg font-semibold mb-4">Recent Activity</h3>
            <div class="space-y-4">
                <x-activity-item
                    user="Mike Chen"
                    action="completed task"
                    target="API Documentation"
                    time="2 hours ago"
                />
                <x-activity-item
                    user="Sarah Johnson"
                    action="created project"
                    target="Mobile App"
                    time="5 hours ago"
                />
            </div>
        </div>
    </div>
</main>

<x-footer />
