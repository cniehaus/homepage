<?php snippet('header') ?>

<?php snippet('page-header') ?>

<script src='../../assets/js/packages/core/main.js'></script>
<script src='../../assets/js/packages/daygrid/main.js'></script>
<script src='../../assets/js/list/main.js'></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale: 'de', //Darstellung auf Deutsch
      plugins: ['list', 'dayGrid'],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth, dayGridWeek, dayGridDay, listMonth'
      },
      buttonText: {
        today: 'Heute',
        month: 'Monat',
        week: 'Woche',
        day: 'Tag',
        list: 'Monatsliste',
      },
      firstDay: 1,
      navLinks: true, // can click day/week names to navigate views
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      eventLimitText: "weitere", // allow "more" link when too many events
      weekNumbers: true, // Kalenderwoche anzeigen
      weekLabel: "KW", // Beschriftung der Kalenderwoche
      allDayText: "ganztägig",
      noEventsMessage: "Keine Ereignisse anzuzeigen",
      displayEventTime: true, // don't show the time column in list view
      events: '<?= $kirby->url('assets') ?>/kalender/schulkalender.json'
    });

    calendar.render();
    calendar.refetchEvents(); //Test
  });
</script>

<div id='calendar'></div>

<?php snippet('footer') ?>