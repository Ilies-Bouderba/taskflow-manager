<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $slot }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>


    <style>
        .task-card {
            @apply bg-white p-3 rounded-lg shadow-xs border border-purple-50 hover:shadow-sm transition-shadow;
        }

        .avatar-sm {
            @apply w-6 h-6 rounded-full bg-purple-500 text-white flex items-center justify-center text-xs font-medium;
        }

        .priority-badge {
            @apply px-2 py-1 rounded-full text-xs;

            &.high {
                @apply bg-pink-100 text-pink-600;
            }

            &.medium {
                @apply bg-yellow-100 text-yellow-600;
            }

            &.low {
                @apply bg-gray-100 text-gray-600;
            }
        }

        .status-badge {
            @apply px-2 py-1 rounded-full text-xs;

            &.todo {
                @apply bg-gray-100 text-gray-600;
            }

            &.in_progress {
                @apply bg-blue-100 text-blue-600;
            }

            &.review {
                @apply bg-purple-100 text-purple-600;
            }

            &.done {
                @apply bg-green-100 text-green-600;
            }
        }

        .btn-primary {
            @apply px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 flex items-center gap-2 transition-colors;
        }

        .task-card { @apply bg-white p-4 rounded-xl shadow-sm border border-purple-50 hover:shadow-md transition-all; }
        .avatar-sm { @apply w-6 h-6 rounded-full bg-purple-500 text-white flex items-center justify-center text-xs; }
        .priority-badge {
            @apply px-2 py-1 rounded-full text-xs;
            &.high { @apply bg-pink-100 text-pink-600; }
            &.medium { @apply bg-yellow-100 text-yellow-600; }
            &.low { @apply bg-gray-100 text-gray-600; }
        }
        .fc {
            @apply p-4 rounded-xl border border-purple-50;
            --fc-border-color: #f3e8ff;
            --fc-today-bg-color: #faf5ff;
        }
        .fc-event { @apply rounded-lg px-2 py-1 text-sm cursor-pointer; }
    </style>
</head>

<body class="font-sans bg-gray-100 text-gray-800">
