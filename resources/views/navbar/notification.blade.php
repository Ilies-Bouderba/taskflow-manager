<x-header>
    Notification
</x-header>
<x-nav />


<main class="pt-8 pb-8 px-4" x-data="notificationPage()">
    <div class="max-w-7xl mx-auto">
        <!-- Notifications Header -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Notifications</h2>
                <p class="text-gray-600 mt-1" x-text="`${unreadCount} unread notifications`"></p>
            </div>
            <div class="flex gap-2">
                <button @click="markAllAsRead()"
                    class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 flex items-center gap-2 shadow-sm hover:shadow-md transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Mark all as read
                </button>
                <button @click="clearAll()"
                    class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    Clear All
                </button>
            </div>
        </div>

        <!-- Filter Tabs -->
        <div class="flex flex-wrap gap-2 mb-6">
            <template x-for="(filter, index) in filters" :key="index">
                <button @click="selectedFilter = filter.value"
                    :class="selectedFilter === filter.value ?
                        'bg-purple-100 text-purple-600' :
                        'text-gray-500 hover:bg-gray-100'"
                    class="px-4 py-2 rounded-lg font-medium transition-colors flex items-center gap-2">
                    <span x-text="filter.label"></span>
                    <span x-show="filter.value === 'unread'"
                        class="bg-purple-600 text-white rounded-full px-2 py-1 text-xs" x-text="unreadCount"></span>
                </button>
            </template>
        </div>

        <!-- Notifications List -->
        <div class="bg-white rounded-xl shadow-sm">
            <template x-for="notification in filteredNotifications" :key="notification.id">
                <div class="p-4 border-b last:border-b-0 hover:bg-gray-50 transition-colors group"
                    :class="{ 'opacity-75': notification.read }">
                    <div class="flex items-start gap-4">
                        <!-- Avatar -->
                        <div class="shrink-0">
                            <template x-if="notification.sender">
                                <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center">
                                    <span class="text-purple-600 text-sm" x-text="notification.sender.initials"></span>
                                </div>
                            </template>
                            <template x-if="!notification.sender">
                                <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </template>
                        </div>

                        <!-- Content -->
                        <div class="flex-1">
                            <div class="flex items-baseline gap-2 mb-1">
                                <h3 class="font-medium" x-text="notification.title"></h3>
                                <span class="text-xs text-gray-500" x-text="timeAgo(notification.timestamp)"></span>
                            </div>
                            <p class="text-gray-600" x-text="notification.message"></p>

                            <!-- Actions -->
                            <div class="mt-3 flex items-center gap-3">
                                <template x-if="notification.actions">
                                    <template x-for="action in notification.actions">
                                        <button @click="handleAction(action)"
                                            class="text-sm px-3 py-1 rounded-md transition-colors"
                                            :class="action.primary ?
                                                'bg-purple-600 text-white hover:bg-purple-700' :
                                                'text-purple-600 hover:bg-purple-50'">
                                            <span x-text="action.label"></span>
                                        </button>
                                    </template>
                                </template>
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="shrink-0 flex items-center gap-2">
                            <!-- Status Indicator -->
                            <div class="w-2 h-2 rounded-full"
                                :class="{
                                    'bg-purple-600': !notification.read,
                                    'bg-gray-300': notification.read
                                }">
                            </div>

                            <!-- Dismiss -->
                            <button @click="dismiss(notification.id)"
                                class="text-gray-400 hover:text-purple-600 opacity-0 group-hover:opacity-100 transition-opacity">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </template>

            <!-- Empty State -->
            <div x-show="notifications.length === 0" class="text-center py-12 text-gray-500">
                <svg class="mx-auto h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="mt-4">No notifications found</p>
                <p class="text-sm mt-2 text-gray-400">We'll notify you when there's something new</p>
            </div>
        </div>
    </div>
</main>

<x-footer />

<script>
    function notificationPage() {
        return {
            filters: [{
                    label: 'All',
                    value: 'all'
                },
                {
                    label: 'Unread',
                    value: 'unread'
                },
                {
                    label: 'System',
                    value: 'system'
                },
                {
                    label: 'Tasks',
                    value: 'tasks'
                }
            ],
            selectedFilter: 'all',
            notifications: [{
                    id: 1,
                    type: 'task',
                    title: 'New Task Assigned',
                    message: '"Homepage Design" was assigned to you by Sarah Johnson',
                    timestamp: new Date(Date.now() - 7200000), // 2 hours ago
                    read: false,
                    sender: {
                        name: 'Sarah Johnson',
                        initials: 'SJ'
                    },
                    actions: [{
                            label: 'View Task',
                            type: 'view_task',
                            primary: true
                        },
                        {
                            label: 'Mark as Read',
                            type: 'mark_read'
                        }
                    ]
                },
                {
                    id: 2,
                    type: 'system',
                    title: 'System Update',
                    message: 'New feature: Task dependencies are now available',
                    timestamp: new Date(Date.now() - 86400000), // 1 day ago
                    read: true,
                    actions: [{
                        label: 'Learn More',
                        type: 'learn_more',
                        primary: true
                    }]
                }
            ],

            get unreadCount() {
                return this.notifications.filter(n => !n.read).length
            },

            get filteredNotifications() {
                return this.notifications.filter(n => {
                    if (this.selectedFilter === 'all') return true
                    if (this.selectedFilter === 'unread') return !n.read
                    return n.type === this.selectedFilter
                })
            },

            timeAgo(date) {
                const seconds = Math.floor((new Date() - date) / 1000)
                const intervals = {
                    year: 31536000,
                    month: 2592000,
                    day: 86400,
                    hour: 3600,
                    minute: 60
                }

                for (const [unit, secondsInUnit] of Object.entries(intervals)) {
                    const interval = Math.floor(seconds / secondsInUnit)
                    if (interval >= 1) {
                        return `${interval}${unit[0]} ago`
                    }
                }
                return 'Just now'
            },

            markAllAsRead() {
                this.notifications = this.notifications.map(n => ({
                    ...n,
                    read: true
                }))
            },

            clearAll() {
                this.notifications = []
            },

            dismiss(id) {
                this.notifications = this.notifications.filter(n => n.id !== id)
            },

            handleAction(action) {
                switch (action.type) {
                    case 'view_task':
                        // Handle view task logic
                        break
                    case 'mark_read':
                        this.markAsRead(action.notificationId)
                        break
                    case 'learn_more':
                        // Handle learn more logic
                        break
                }
            },

            markAsRead(id) {
                this.notifications = this.notifications.map(n =>
                    n.id === id ? {
                        ...n,
                        read: true
                    } : n
                )
            }
        }
    }
</script>
