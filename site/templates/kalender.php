<?php snippet('header') ?>

<?php snippet('page-header') ?>

<style>
  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }
</style>

<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultDate: '2020-02-12',
      navLinks: true, // can click day/week names to navigate views

      weekNumbers: true,
      weekNumbersWithinDays: true,
      weekNumberCalculation: 'ISO',

      editable: true,
      eventLimit: true, // allow "more" link when too many events

      // Gültiges JSON ist so aufgebaut: 
      // [
      //   {
      //     title: 'All Day Event',
      //     start: '2020-02-01'
      //   },
      //   {
      //     title: 'Long Event',
      //     start: '2020-02-07',
      //     end: '2020-02-10'
      //   }
      // ]


      events: '<?= $kirby->url('assets') ?>/kgs.json'
    });

    calendar.render();
  });

</script>

<div id='calendar'></div>

<?php snippet('footer') ?>