
var Calendar = require('tui-calendar');
var moment = require('moment');

require('tui-calendar/dist/tui-calendar.css');
// Custom css.
require('../css/calendar.css');

document.addEventListener('DOMContentLoaded', function() {
  var calendarElement = document.getElementById('calendar');
  var days = calendarElement.getAttribute('data-days');
  var events = calendarElement.getAttribute('data-events');

  // Create calendar instance.
  var calendar = new Calendar(calendarElement, {
    defaultView: 'month',
    useDetailPopup: true,
    disableDblClick: true,
    disableClick: true,
    isReadOnly: true,
    usageStatistics: false,
    month: {
      daynames: JSON.parse(days),
      startDayOfWeek: 1,
    },
    theme: {
      // See all possible options:
      // https://nhn.github.io/tui.calendar/latest/themeConfig
      'common.border': '1px solid #e5e5e5',
      'common.backgroundColor': 'white',
      'common.holiday.color': '#ff4040',
      'common.saturday.color': 'red',
      'common.dayname.color': '#333',
      'common.today.color': '#333',
    },
    calendars: [
      {
        bgColor: 'blue',
        borderColor: 'red',
      }
    ]
  });

  // Load evetns to calendar.
  calendar.createSchedules(JSON.parse(events).map(event => {
    console.log(event);
    return {
      id: event.id,
      title: event.title,
      category: 'time',
      body: event.description,
      start: event.date_from,
      end: event.date_to,
    };
  }));

  // Navigation.
  document.getElementById('today').onclick = function() {
    calendar.today();
    refreshRenderRange();
  };
  document.getElementById('prev').onclick = function() {
    calendar.prev();
    refreshRenderRange();
  };
  document.getElementById('next').onclick = function() {
    calendar.next();
    refreshRenderRange();
  };
  function refreshRenderRange() {
    var date = moment(calendar.getDate().getTime()).format('YYYY.MM');
    document.getElementById('renderRange').innerHTML = date;
  }
  refreshRenderRange();
});
