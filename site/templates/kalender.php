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
      plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
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

      //   events: [{
      //       title: 'All Day Event',
      //       start: '2020-02-01'
      //     },
      //     {
      //       title: 'Long Event',
      //       start: '2020-02-07',
      //       end: '2020-02-10'
      //     },
      //     {
      //       groupId: 999,
      //       title: 'Repeating Event',
      //       start: '2020-02-09T16:00:00'
      //     },
      //     {
      //       groupId: 999,
      //       title: 'Repeating Event',
      //       start: '2020-02-16T16:00:00'
      //     },
      //   ]
      // });


      events: [{
          title: '11. März, 10 bis 12 Uhr',
          start: '2020-03-11 10:00:00+01:00',
          end: '2020-03-11 12:00:00+01:00'
        },

        {
          title: 'Frau Root einweisen',
          start: '2019-02-06 14:30:00+01:00',
          end: '2019-02-06 14:45:00+01:00'
        },

        {
          title: 'Besprechung Sommerfest',
          start: '2019-02-27 14:00:00+01:00',
          end: '2019-02-27 14:30:00+01:00'
        },

        {
          title: 'Treffen mit Eltern',
          start: '2019-02-02 10:00:00+01:00',
          end: '2019-02-02 12:00:00+01:00'
        },

        {
          title: 'Personalversammlung',
          start: '2019-02-04 14:00:00+01:00',
          end: '2019-02-04 15:00:00+01:00'
        },

        {
          title: 'Büro einräumen',
          start: '2019-02-01 15:00:00+01:00',
          end: '2019-02-01 17:00:00+01:00'
        },

        {
          title: '2 Tag, 12 und 13. März',
          start: '2020-03-12',
          end: '2020-03-14'
        },

        {
          title: 'Testevent 1 ganztägig 10. März',
          start: '2020-03-10',
          end: '2020-03-11'
        },

        {
          title: 'Maker Faire Hannover',
          start: '2019-08-17 10:00:00+02:00',
          end: '2019-08-18 11:00:00+02:00'
        },

        {
          title: 'Aimo Kohltour',
          start: '2019-02-22 15:00:00+01:00',
          end: '2019-02-22 22:00:00+01:00'
        },

        {
          title: 'Begehung Räume',
          start: '2019-04-30',
          end: '2019-05-01'
        }
      ]
    });



    calendar.render();
  });
</script>

<div id='calendar'></div>

<?php snippet('footer') ?>