<!DOCTYPE html>
<html>
<head>
    <title>FullCalendar in Laravel</title>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
</head>
<body>
    <div id='calendar'></div>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            console.log(calendarEl);
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: '/api/events' // Your API endpoint for events
                // Add other FullCalendar options as needed
            });
            console.log(calendar);
            calendar.render();
        });
    </script>
</body>
</html>