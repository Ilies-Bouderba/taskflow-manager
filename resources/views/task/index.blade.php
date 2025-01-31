<!-- task-details.blade.php -->
<x-header>Task Details</x-header>
<x-nav />

<main class="pt-8 pb-8 px-4" x-data="{
    showEditModal: false,
    showDeleteModal: false,
    showAddMemberModal: false,
    showAddAttachmentModal: false,
    showSuccess: false,
    successMessage: '',
    activeTab: 'task-chat',
    newMessage: '',
    progress: 50,
    messages: [
        { type: 'task', user: 'Mike Chen', time: '2h ago', text: 'Started working on the homepage design', avatar: 'MC' },
        { type: 'task', user: 'Emma Wilson', time: '1h ago', text: 'Reviewed the wireframes, looks good!', avatar: 'EW' }
    ],
    teamMembers: [
        { name: 'Emma Wilson', role: 'Designer', email: 'emma@example.com', avatar: 'EW', isAssignee: true },
        { name: 'Mike Chen', role: 'Developer', email: 'mike@example.com', avatar: 'MC', isAssignee: false }
    ],
    attachments: [
        { name: 'wireframes.pdf', size: '1.2MB', uploadedBy: 'Emma Wilson', time: '2h ago' },
        { name: 'design-specs.docx', size: '0.8MB', uploadedBy: 'Mike Chen', time: '1h ago' }
    ],
    subtasks: [
        { title: 'Create wireframes', dueDate: 'Dec 15', completed: false },
        { title: 'Design mobile layout', dueDate: 'Dec 18', completed: false }
    ],
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

        <!-- Task Header -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Homepage Design</h1>
                <div class="flex items-center gap-4 text-sm text-gray-600">
                    <span class="bg-purple-100 text-purple-600 px-2 py-1 rounded-full">In Progress</span>
                    <span>Due: Dec 15, 2023</span>
                </div>
            </div>
            <div class="flex gap-2">
                <button @click="showEditModal = true" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                    Edit Task
                </button>
                <button @click="showDeleteModal = true" class="px-4 py-2 border border-red-600 text-red-600 rounded-lg hover:bg-red-50">
                    Delete
                </button>
            </div>
        </div>

        <!-- Task Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Task Description -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold mb-4">Description</h2>
                    <p class="text-gray-600">Design a modern and responsive homepage for the company website.</p>
                </div>

                <!-- Subtasks -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold mb-4">Subtasks</h2>
                    <div class="space-y-3">
                        <template x-for="(subtask, index) in subtasks" :key="index">
                            <div class="flex items-center gap-3 p-2 hover:bg-gray-50 rounded-lg">
                                <input type="checkbox" class="rounded border-gray-300" x-model="subtasks[index].completed">
                                <span class="text-gray-600" x-text="subtask.title"></span>
                                <span class="ml-auto text-sm text-gray-500" x-text="subtask.dueDate"></span>
                            </div>
                        </template>
                    </div>
                    <button class="mt-4 px-4 py-2 text-purple-600 hover:bg-purple-50 rounded-lg w-full">
                        + Add Subtask
                    </button>
                </div>

                <!-- Attachments -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold">Attachments</h2>
                        <button @click="showAddAttachmentModal = true" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            + Add Attachment
                        </button>
                    </div>
                    <div class="space-y-3">
                        <template x-for="attachment in attachments" :key="attachment.name">
                            <div class="flex items-center justify-between gap-3 p-3 hover:bg-gray-50 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <span class="text-gray-500">📎</span>
                                    <div>
                                        <p class="text-gray-600" x-text="attachment.name"></p>
                                        <p class="text-sm text-gray-500"
                                           x-text="attachment.size + ' · ' + attachment.uploadedBy + ' · ' + attachment.time">
                                        </p>
                                    </div>
                                </div>
                                <button @click="
                                    attachments = attachments.filter(a => a.name !== attachment.name);
                                    showSuccessNotification('Attachment deleted successfully')"
                                    class="px-3 py-1 text-sm text-red-600 hover:bg-red-50 rounded-lg border border-red-100">
                                    Delete
                                </button>
                            </div>
                        </template>
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
                        <span>Due: Dec 15, 2023</span>
                    </div>
                </div>

                <!-- Team Members -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold">Team Members (2)</h2>
                        <button @click="showAddMemberModal = true" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            + Add Member
                        </button>
                    </div>
                    <div class="space-y-4">
                        <template x-for="member in teamMembers" :key="member.name">
                            <div class="flex items-center gap-3 p-3 hover:bg-gray-50 rounded-lg">
                                <span class="bg-purple-100 text-purple-600 rounded-full w-8 h-8 flex items-center justify-center"
                                      x-text="member.avatar"></span>
                                <div>
                                    <p class="font-medium" x-text="member.name"></p>
                                    <p class="text-sm text-gray-500" x-text="member.role"></p>
                                </div>
                                <button @click="
                                    teamMembers = teamMembers.filter(m => m.name !== member.name);
                                    showSuccessNotification('Member removed successfully')"
                                    class="ml-auto px-3 py-1 text-sm text-red-600 hover:bg-red-50 rounded-lg border border-red-100">
                                    Delete
                                </button>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold mb-4">Comments</h2>
                    <div class="space-y-4 h-64 overflow-y-auto" x-ref="chatContainer">
                        <template x-for="(msg, index) in messages" :key="index">
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
                    <div class="mt-4 flex gap-2">
                        <input x-model="newMessage"
                               @keyup.enter="if(newMessage.trim()) {
                                   messages.push({
                                       type: 'task',
                                       user: 'Current User',
                                       time: 'Just now',
                                       text: newMessage,
                                       avatar: 'CU'
                                   });
                                   newMessage = '';
                               }"
                               type="text"
                               placeholder="Type your message..."
                               class="flex-1 border rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500">
                        <button @click="if(newMessage.trim()) {
                                    messages.push({
                                        type: 'task',
                                        user: 'Current User',
                                        time: 'Just now',
                                        text: newMessage,
                                        avatar: 'CU'
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

    <!-- Edit Task Modal -->
    <div x-show="showEditModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl p-6 w-full max-w-lg">
            <h3 class="text-xl font-bold mb-4">Edit Task</h3>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Task Name</label>
                    <input type="text" value="Homepage Design"
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Description</label>
                    <textarea class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500 h-32">
Design a modern and responsive homepage for the company website.
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
            <h3 class="text-xl font-bold mb-4">Delete Task</h3>
            <p class="text-gray-600 mb-6">Are you sure you want to delete this task? This action cannot be undone.</p>
            <div class="flex justify-end gap-2">
                <button @click="showDeleteModal = false"
                        class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                    Cancel
                </button>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Delete Task
                </button>
            </div>
        </div>
    </div>

    <!-- Add Team Member Modal -->
    <div x-show="showAddMemberModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl p-6 w-full max-w-lg">
            <h3 class="text-xl font-bold mb-4">Add Team Member</h3>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Name</label>
                    <input type="text" placeholder="Enter name"
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Role</label>
                    <input type="text" placeholder="Enter role"
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" placeholder="Enter email"
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
                </div>
                <div class="flex justify-end gap-2 mt-6">
                    <button @click="showAddMemberModal = false" type="button"
                            class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        Cancel
                    </button>
                    <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                        Add Member
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Add Attachment Modal -->
    <div x-show="showAddAttachmentModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl p-6 w-full max-w-lg">
            <h3 class="text-xl font-bold mb-4">Add Attachment</h3>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Upload File</label>
                    <input type="file"
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
                </div>
                <div class="flex justify-end gap-2 mt-6">
                    <button @click="showAddAttachmentModal = false" type="button"
                            class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        Cancel
                    </button>
                    <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                        Upload
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<x-footer />
