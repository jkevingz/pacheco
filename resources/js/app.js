require('./bootstrap');

require('alpinejs');

//------------------------CALENDARIO--------------------------

var Calendar = require('tui-calendar'); /* CommonJS */
require("tui-calendar/dist/tui-calendar.css");

// If you use the default popups, use this.
require("tui-date-picker/dist/tui-date-picker.css");
require("tui-time-picker/dist/tui-time-picker.css");

var calendar = new Calendar('#calendar', {
    defaultView: 'month',
    taskView: true,
    template: {

        monthDayname: function(dayname) {
        return '<span class="calendar-week-dayname-name">' + dayname.label + '</span>';
      }

    }
  });

  calendar.createSchedules([
    {
        id: '1',
        calendarId: '1',
        title: 'Evento de Prueba',
        category: 'time',
        dueDateClass: '',
        start: '2021-06-25T03:30:00+09:00',
        end: '2021-06-25T04:30:00+09:00'
    },
    {
        id: '2',
        calendarId: '1',
        title: 'second schedule',
        category: 'time',
        dueDateClass: '',
        start: '2018-01-18T17:30:00+09:00',
        end: '2018-01-19T17:31:00+09:00',
        isReadOnly: true    // schedule is read-only
    }
]);

//***************

// register templates
var templates = {
  popupIsAllDay: function() {
    return 'All Day';
  },
  popupStateFree: function() {
    return 'Free';
  },
  popupStateBusy: function() {
    return 'Busy';
  },
  titlePlaceholder: function() {
    return 'Subject';
  },
  locationPlaceholder: function() {
    return 'Location';
  },
  startDatePlaceholder: function() {
    return 'Start date';
  },
  endDatePlaceholder: function() {
    return 'End date';
  },
  popupSave: function() {
    return 'Save';
  },
  popupUpdate: function() {
    return 'Update';
  },
  popupDetailDate: function(isAllDay, start, end) {
    var isSameDate = moment(start).isSame(end);
    var endFormat = (isSameDate ? '' : 'YYYY.MM.DD ') + 'hh:mm a';

    if (isAllDay) {
      return moment(start).format('YYYY.MM.DD') + (isSameDate ? '' : ' - ' + moment(end).format('YYYY.MM.DD'));
    }

    return (moment(start).format('YYYY.MM.DD hh:mm a') + ' - ' + moment(end).format(endFormat));
  },
  popupDetailLocation: function(schedule) {
    return 'Location : ' + schedule.location;
  },
  popupDetailUser: function(schedule) {
    return 'User : ' + (schedule.attendees || []).join(', ');
  },
  popupDetailState: function(schedule) {
    return 'State : ' + schedule.state || 'Busy';
  },
  popupDetailRepeat: function(schedule) {
    return 'Repeat : ' + schedule.recurrenceRule;
  },
  popupDetailBody: function(schedule) {
    return 'Body : ' + schedule.body;
  },
  popupEdit: function() {
    return 'Edit';
  },
  popupDelete: function() {
    return 'Delete';
  }
};

var cal = new tui.Calendar('#calendar', {
  defaultView: 'month',
  template: templates,
  useCreationPopup: true,
  useDetailPopup: true
});