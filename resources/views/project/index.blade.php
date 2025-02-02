<!-- project-details.blade.php -->
<x-header>Project Details</x-header>
<x-nav />

<main class="pt-8 pb-8 px-4" x-data="{
    showEditModal: false,
    showDeleteModal: false,
    activeTab: 'project-chat',
    newMessage: '',
    messages: [],
    showSuccess: false,
    successMessage: '',
    progress: {{ $project->progress }},
    showSuccessNotification(message) {
        this.showSuccess = true;
        this.successMessage = message;
        setTimeout(() => this.showSuccess = false, 3000);
    }
}" x-init="$watch('messages', () => $nextTick(() => $refs.chatContainer.scrollTop = $refs.chatContainer.scrollHeight))">
    <div class="max-w-7xl mx-auto">
        <!-- Success Notification -->
        <div x-show="showSuccess" x-transition
            class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg">
            <span x-text="successMessage"></span>
        </div>

        <!-- Project Header -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $project->name }}</h1>
                <div class="flex items-center gap-4 text-sm text-gray-600">
                    <span class="bg-purple-100 text-purple-600 px-2 py-1 rounded-full">Active</span>
                    <span>Created: {{ $project->created_at->format('M d, Y') }}</span>
                    <span>Lead: {{ $admin->name }}</span>
                </div>
            </div>
            <div class="flex gap-2">
                <button @click="showEditModal = true"
                    class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                    Edit Project
                </button>
                <button @click="showDeleteModal = true"
                    class="px-4 py-2 border border-red-600 text-red-600 rounded-lg hover:bg-red-50">
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
                    <p class="text-gray-600">{{ $project->description }}</p>
                </div>

                <!-- Task Board with Pagination -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold">Task Board</h2>
                        <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            + New Task
                        </button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- To Do Column -->
                        <div class="bg-gray-50 p-4 rounded-lg flex flex-col h-full">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="font-semibold">To Do</h3>
                                <span class="text-sm text-gray-500">{{ $ToDo->total() }} tasks</span>
                            </div>

                            <div class="space-y-4 flex-1 mb-4">
                                @foreach ($ToDo as $Todo_card)
                                    <x-task-card ... />
                                @endforeach
                            </div>

                            @if ($ToDo->hasPages())
                                <div class="mt-auto pt-4 border-t border-gray-200">
                                    {{ $ToDo->onEachSide(0)->links() }}
                                </div>
                            @endif
                        </div>

                        <!-- In Progress Column -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="font-semibold">In Progress</h3>
                                <span class="text-sm text-gray-500">{{ $Progress->total() }} tasks</span>
                            </div>
                            <div class="space-y-4">
                                @foreach ($Progress as $Progres)
                                    <x-task-card title="{{ Str::limit($Progres->title, 10) }}"
                                        priority="{{ $Progres->priority }}" status="In Progress"
                                        dueDate="{{ $Progres->due_date }}"
                                        assignee="{{ Str::limit($Progres->leader->name, 10) }}" />
                                @endforeach
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                {{ $Progress->links() }}
                            </div>
                        </div>

                        <!-- Done Column -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="font-semibold">Done</h3>
                                <span class="text-sm text-gray-500">{{ $Done->total() }} tasks</span>
                            </div>
                            <div class="space-y-4">
                                @foreach ($Done as $ddone)
                                    <x-task-card title="{{ Str::limit($ddone->title, 10) }}"
                                        priority="{{ $ddone->priority }}" status="done"
                                        dueDate="{{ $ddone->due_date }}"
                                        assignee="{{ Str::limit($ddone->leader->name, 10) }}" />
                                @endforeach
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                {{ $Done->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-8 lg:sticky lg:top-8 lg:h-[85vh] lg:overflow-y-auto">
                <!-- Progress -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold mb-4">Progress</h2>
                    <div class="h-2 bg-gray-200 rounded-full mb-2 overflow-hidden">
                        <div class="h-full bg-purple-600 rounded-full transition-all duration-500"
                            x-bind:style="'width: ' + progress + '%'"></div>
                    </div>
                    <div class="flex justify-between text-sm text-gray-600">
                        <span x-text="progress + '% Complete'"></span>
                        <span>Due:
                            {{ $project->due_date ? Carbon\Carbon::parse($project->due_date)->format('M d, Y') : 'No due date' }}</span>
                    </div>
                </div>

                <!-- Team Members -->
                <!-- Team Members -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold mb-4">Team ({{ $teamMembers->total() }})</h2>
                    <div class="space-y-3">
                        @foreach ($teamMembers as $member)
                            <div class="flex items-center gap-3">
                                <span
                                    class="bg-purple-100 text-purple-600 rounded-full w-8 h-8 flex items-center justify-center">
                                    {{ strtoupper(substr($member->name, 0, 2)) }}
                                </span>
                                <div>
                                    <p class="font-medium">{{ $member->name }}</p>
                                    <p class="text-sm text-gray-500">{{ $member->email }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-4">
                        {{ $teamMembers->links() }}
                    </div>
                </div>

                <!-- Chat Interface -->
                <!-- Chat Interface -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex gap-4 mb-4 border-b">
                        <button class="pb-2 px-1 font-medium border-b-2 border-purple-600">
                            Project Chat ({{ $messages->count() }})
                        </button>
                    </div>

                    <div class="space-y-4 h-96 overflow-y-auto" x-ref="chatContainer">
                        @foreach ($messages as $message)
                            @php
                                $isCurrentUser = Auth::id() === $message->user_id;
                                $userInitials = Str::upper(Str::limit($message->user->name, 2, ''));
                                $userName = Str::limit($message->user->name, 15);
                            @endphp

                            <div class="flex gap-3 {{ $isCurrentUser ? 'flex-row-reverse' : '' }}">
                                <!-- User Avatar -->
                                <div class="flex-shrink-0">
                                    <span
                                        class="bg-purple-100 text-purple-600 rounded-full w-8 h-8 flex items-center justify-center">
                                        {{ $userInitials }}
                                    </span>
                                </div>

                                <!-- Message Content -->
                                <div class="{{ $isCurrentUser ? 'text-right' : '' }} flex-1">
                                    <!-- User Info -->
                                    <div
                                        class="mb-1 flex items-center gap-2 {{ $isCurrentUser ? 'flex-row-reverse' : '' }}">
                                        <span class="font-medium" title="{{ $message->user->name }}">
                                            {{ $userName }}
                                        </span>
                                        <span class="text-sm text-gray-500">
                                            @if ($message->created_at->diffInHours() < 24)
                                                {{ $message->created_at->diffForHumans() }}
                                            @else
                                                {{ $message->created_at->format('M j, Y g:i A') }}
                                            @endif
                                        </span>
                                    </div>

                                    <!-- Message Bubble -->
                                    <div
                                        class="rounded-lg p-3 {{ $isCurrentUser ? 'bg-purple-600 text-white ml-12' : 'bg-gray-50 mr-12' }}">
                                        <p class="break-words">{{ $message->message }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Message Input -->
                    <div class="mt-4 flex gap-2">
                        <input type="text" placeholder="Type your message..."
                            class="flex-1 border rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500">
                        <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            Send
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <!-- Edit Project Modal -->
    <div x-show="showEditModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
        <!-- Keep existing modal code -->
    </div>

    <!-- Delete Confirmation Modal -->
    <div x-show="showDeleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
        <!-- Keep existing modal code -->
    </div>
</main>

<x-footer />

<style>
    .lg\:h-\[85vh\] {
        height: 85vh;
    }

    .lg\:overflow-y-auto {
        overflow-y: auto;
    }

    [x-cloak] {
        display: none !important;
    }
</style>
