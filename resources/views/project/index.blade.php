<!-- project-details.blade.php -->
<x-header>Project Details</x-header>
<x-nav />

<main class="pt-8 pb-8 px-4" x-data="{
    showEditModal: false,
    showDeleteModal: false,
    activeTab: 'project-chat',
    newMessage: '',
    messages: [
        {
            type: 'project',
            user: 'Mike Chen',
            time: '2h ago',
            text: 'Just uploaded the latest wireframes for review',
            avatar: 'MC'
        },
        {
            type: 'task',
            task: 'Homepage Design',
            user: 'Emma',
            time: '1h ago',
            text: 'Started working on mobile responsive design',
            avatar: 'EW'
        }
    ],
    showSuccess: false,
    successMessage: '',
    progress: 67,
    showSuccessNotification(message) {
        this.showSuccess = true;
        this.successMessage = message;
        setTimeout(() => this.showSuccess = false, 3000);
    }
}" x-init="$watch('messages', () => $nextTick(() => $refs.chatContainer.scrollTop = $refs.chatContainer.scrollHeight))">
    <div class="max-w-7xl mx-auto">
        <!-- Success Notification -->
        <div x-show="showSuccess" x-transition class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg">
            <span x-text="successMessage"></span>
        </div>

        <!-- Project Header -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Website Redesign</h1>
                <div class="flex items-center gap-4 text-sm text-gray-600">
                    <span class="bg-purple-100 text-purple-600 px-2 py-1 rounded-full">Active</span>
                    <span>Created: Dec 1, 2023</span>
                    <span>Lead: Sarah Johnson</span>
                </div>
            </div>
            <div class="flex gap-2">
                <button @click="showEditModal = true" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                    Edit Project
                </button>
                <button @click="showDeleteModal = true" class="px-4 py-2 border border-red-600 text-red-600 rounded-lg hover:bg-red-50">
                    Delete
                </button>
            </div>
        </div>

        <!-- Project Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Project Description -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold mb-4">Description</h2>
                    <p class="text-gray-600">Complete redesign of company website including new IA, visual design, and CMS migration.</p>
                </div>

                <!-- Task Board -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold">Task Board</h2>
                        <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            + New Task
                        </button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- To Do Column -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="font-semibold">To Do</h3>
                                <span class="text-sm text-gray-500">3 tasks</span>
                            </div>
                            <div class="space-y-4">
                                <x-task-card
                                    title="Homepage Design"
                                    priority="high"
                                    status="todo"
                                    dueDate="Dec 15"
                                    assignee="Emma Wilson"
                                    leader="Sarah Johnson"
                                />
                                <x-task-card
                                    title="Content Migration"
                                    priority="medium"
                                    status="todo"
                                    dueDate="Dec 18"
                                    assignee="Mike Chen"
                                    leader="Sarah Johnson"
                                />
                            </div>
                        </div>

                        <!-- In Progress Column -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="font-semibold">In Progress</h3>
                                <span class="text-sm text-gray-500">2 tasks</span>
                            </div>
                            <div class="space-y-4">
                                <x-task-card
                                    title="API Integration"
                                    priority="medium"
                                    status="in_progress"
                                    dueDate="Dec 18"
                                    assignee="Mike Chen"
                                    leader="Sarah Johnson"
                                />
                            </div>
                        </div>

                        <!-- Done Column -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="font-semibold">Done</h3>
                                <span class="text-sm text-gray-500">5 tasks</span>
                            </div>
                            <div class="space-y-4">
                                <x-task-card
                                    title="Project Setup"
                                    priority="low"
                                    status="done"
                                    dueDate="Dec 1"
                                    assignee="Mike Chen"
                                    leader="Sarah Johnson"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-8">
                <!-- Progress -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold mb-4">Progress</h2>
                    <div class="h-2 bg-gray-200 rounded-full mb-2 overflow-hidden">
                        <div class="h-full bg-purple-600 rounded-full transition-all duration-500"
                             x-bind:style="'width: ' + progress + '%'"></div>
                    </div>
                    <div class="flex justify-between text-sm text-gray-600">
                        <span x-text="progress + '% Complete'"></span>
                        <span>Due: Dec 30, 2023</span>
                    </div>
                </div>

                <!-- Team Members -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold mb-4">Team (3)</h2>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <span class="bg-purple-100 text-purple-600 rounded-full w-8 h-8 flex items-center justify-center">SJ</span>
                            <div>
                                <p class="font-medium">Sarah Johnson</p>
                                <p class="text-sm text-gray-500">Project Lead</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="bg-purple-100 text-purple-600 rounded-full w-8 h-8 flex items-center justify-center">EW</span>
                            <div>
                                <p class="font-medium">Emma Wilson</p>
                                <p class="text-sm text-gray-500">Designer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Chat Interface -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex gap-4 mb-4 border-b">
                        <button @click="activeTab = 'project-chat'"
                                :class="activeTab === 'project-chat' ? 'border-b-2 border-purple-600' : 'text-gray-500'"
                                class="pb-2 px-1 font-medium">
                            Project Chat
                        </button>
                        <button @click="activeTab = 'task-chat'"
                                :class="activeTab === 'task-chat' ? 'border-b-2 border-purple-600' : 'text-gray-500'"
                                class="pb-2 px-1 font-medium">
                            Task Discussions
                        </button>
                    </div>

                    <!-- Project Chat -->
                    <div x-show="activeTab === 'project-chat'" class="space-y-4 h-64 overflow-y-auto" x-ref="chatContainer">
                        <template x-for="(msg, index) in messages.filter(m => m.type === 'project')" :key="index">
                            <div class="flex gap-3 group">
                                <div class="flex-shrink-0">
                                    <span class="bg-purple-100 text-purple-600 rounded-full w-8 h-8 flex items-center justify-center"
                                          x-text="msg.avatar"></span>
                                </div>
                                <div class="flex-1">
                                    <div class="mb-1 flex items-center gap-2">
                                        <span class="font-medium" x-text="msg.user"></span>
                                        <span class="text-sm text-gray-500" x-text="msg.time"></span>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3 transition-colors group-hover:bg-gray-100">
                                        <p class="text-gray-600" x-text="msg.text"></p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Task Discussions -->
                    <div x-show="activeTab === 'task-chat'" class="space-y-4 h-64 overflow-y-auto">
                        <template x-for="(msg, index) in messages.filter(m => m.type === 'task')" :key="index">
                            <a href="#" class="block p-3 hover:bg-gray-50 rounded-lg transition-colors">
                                <div class="flex items-center gap-3">
                                    <span class="bg-purple-100 text-purple-600 rounded-full w-8 h-8 flex items-center justify-center"
                                          x-text="msg.avatar"></span>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2 text-sm mb-1">
                                            <span class="font-medium" x-text="msg.task"></span>
                                            <span class="text-gray-500">·</span>
                                            <span class="text-gray-500 text-sm" x-text="msg.time"></span>
                                        </div>
                                        <p class="text-gray-600" x-text="msg.user + ': ' + msg.text"></p>
                                    </div>
                                </div>
                            </a>
                        </template>
                    </div>

                    <!-- Message Input -->
                    <div class="mt-4 flex gap-2">
                        <input x-model="newMessage"
                               @keyup.enter="if(newMessage.trim()) {
                                   messages.push({
                                       type: activeTab === 'project-chat' ? 'project' : 'task',
                                       user: 'Current User',
                                       time: 'Just now',
                                       text: newMessage,
                                       avatar: 'CU',
                                       task: activeTab === 'task-chat' ? 'Homepage Design' : null
                                   });
                                   newMessage = '';
                               }"
                               type="text"
                               placeholder="Type your message..."
                               class="flex-1 border rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500">
                        <button @click="if(newMessage.trim()) {
                                    messages.push({
                                        type: activeTab === 'project-chat' ? 'project' : 'task',
                                        user: 'Current User',
                                        time: 'Just now',
                                        text: newMessage,
                                        avatar: 'CU',
                                        task: activeTab === 'task-chat' ? 'Homepage Design' : null
                                    });
                                    newMessage = '';
                                }"
                                class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            Send
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Project Modal -->
    <div x-show="showEditModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl p-6 w-full max-w-lg">
            <h3 class="text-xl font-bold mb-4">Edit Project</h3>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Project Name</label>
                    <input type="text" value="Website Redesign"
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Description</label>
                    <textarea class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500 h-32">
Complete redesign of company website including new IA, visual design, and CMS migration.
                    </textarea>
                </div>
                <div class="flex justify-end gap-2 mt-6">
                    <button @click="showEditModal = false" type="button"
                            class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        Cancel
                    </button>
                    <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div x-show="showDeleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl p-6 w-full max-w-md">
            <h3 class="text-xl font-bold mb-4">Delete Project</h3>
            <p class="text-gray-600 mb-6">Are you sure you want to delete this project? This action cannot be undone.</p>
            <div class="flex justify-end gap-2">
                <button @click="showDeleteModal = false"
                        class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                    Cancel
                </button>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Delete Project
                </button>
            </div>
        </div>
    </div>
</main>

<x-footer />
