<x-header>TaskFlow - Projects</x-header>
<x-nav />

<main class="pt-20 pb-8 px-4">
    <div class="max-w-7xl mx-auto">
        <!-- Projects Header -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">All Projects</h1>
                <p class="text-gray-600 mt-1">Showing <span x-text="filter === 'all' ? '8' : filter === 'active' ? '5' : '3'"></span> projects</p>
            </div>
            <div class="flex gap-3">
                <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 flex items-center gap-2 transition-all hover:scale-[1.02]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    New Project
                </button>
                <button class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                    Filter
                </button>
            </div>
        </div>

        <!-- Projects Filter -->
        <div class="flex flex-wrap gap-2 mb-6" x-data="{ filter: 'all' }">
            <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-purple-100 text-purple-600' : 'text-gray-600 hover:bg-gray-100'" class="px-3 py-1 rounded-full transition-colors">
                All
            </button>
            <button @click="filter = 'active'" :class="filter === 'active' ? 'bg-purple-100 text-purple-600' : 'text-gray-600 hover:bg-gray-100'" class="px-3 py-1 rounded-full transition-colors">
                Active
            </button>
            <button @click="filter = 'completed'" :class="filter === 'completed' ? 'bg-purple-100 text-purple-600' : 'text-gray-600 hover:bg-gray-100'" class="px-3 py-1 rounded-full transition-colors">
                Completed
            </button>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Active Projects -->
            <template x-if="filter === 'all' || filter === 'active'">
                <!-- Project 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-purple-50 group relative"
                    x-data="{ showMenu: false }">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-semibold flex items-center gap-2">
                                Website Redesign
                                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                            </h3>
                            <p class="text-sm text-gray-500">Owner: Sarah Johnson</p>
                        </div>
                        <!-- ... (keep menu code) ... -->
                    </div>
                    <!-- ... (keep progress bar and team members) ... -->
                </div>
            </template>

            <!-- Project 2 -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-purple-50"
                x-show="filter === 'all' || filter === 'active'">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-lg font-semibold flex items-center gap-2">
                            Mobile App Development
                            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                        </h3>
                        <p class="text-sm text-gray-500">Owner: Mike Chen</p>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>Due: Jan 10, 2024</span>
                        <span>8/15 tasks</span>
                    </div>
                    <div class="w-full h-2 bg-gray-200 rounded-full mt-2">
                        <div class="h-2 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full w-1/2"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between text-sm text-gray-500">
                    <div class="flex -space-x-2">
                        <div class="w-6 h-6 rounded-full bg-gradient-to-r from-blue-400 to-purple-400 tooltip" data-tooltip="Mike Chen"></div>
                        <div class="w-6 h-6 rounded-full bg-gradient-to-r from-pink-400 to-yellow-400 tooltip" data-tooltip="Emma Wilson"></div>
                    </div>
                    <span class="text-purple-600">View Details →</span>
                </div>
            </div>

            <!-- Completed Projects -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-purple-50 opacity-90"
                x-show="filter === 'all' || filter === 'completed'">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-lg font-semibold flex items-center gap-2">
                            Marketing Campaign
                            <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </h3>
                        <p class="text-sm text-gray-500">Owner: John Doe</p>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>Completed: Nov 1, 2023</span>
                        <span>20/20 tasks</span>
                    </div>
                    <div class="w-full h-2 bg-gray-200 rounded-full mt-2">
                        <div class="h-2 bg-green-400 rounded-full w-full"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between text-sm text-gray-500">
                    <div class="flex -space-x-2">
                        <div class="w-6 h-6 rounded-full bg-gradient-to-r from-green-400 to-blue-400 tooltip" data-tooltip="John Doe"></div>
                        <div class="w-6 h-6 rounded-full bg-gradient-to-r from-yellow-400 to-red-400 tooltip" data-tooltip="Sarah Johnson"></div>
                    </div>
                    <span class="text-purple-600">View Details →</span>
                </div>
            </div>

            <!-- Add more projects following the same pattern -->

            <!-- New Project Card -->
            <div class="bg-white p-6 rounded-xl shadow-sm border-2 border-dashed border-gray-200 hover:border-purple-300 transition-all hover:scale-[1.02]">
                <button class="w-full h-full flex flex-col items-center justify-center gap-2 text-gray-400 hover:text-purple-600 group">
                    <div class="w-12 h-12 bg-purple-50 rounded-full flex items-center justify-center group-hover:bg-purple-100 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </div>
                    <span class="font-medium">Create New Project</span>
                </button>
            </div>
        </div>
    </div>
</main>

<x-footer />

<style>
.tooltip {
    position: relative;
}

.tooltip::before {
    content: attr(data-tooltip);
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0,0,0,0.8);
    color: white;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
    white-space: nowrap;
    opacity: 0;
    transition: opacity 0.2s;
    pointer-events: none;
}

.tooltip:hover::before {
    opacity: 1;
}
</style>
