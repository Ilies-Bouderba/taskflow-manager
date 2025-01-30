<!-- components/task-calendar.blade.php -->
<div id="calendar" class="fc"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: [
            @foreach($tasks as $task)
            {
                title: '{{ $task->title }}',
                start: '{{ $task->due_date->format('Y-m-d') }}',
                color: '{{ $task->priority_color }}'
            },
            @endforeach
        ]
    });
    calendar.render();
});
</script>
