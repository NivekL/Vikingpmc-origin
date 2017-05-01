function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var schedule = [
    ['2016-08-01 19:00:00 GMT+0200', '2016-08-23 18:59:59 GMT+0200'],
    ['2016-08-23 19:00:00 GMT+0200', '2016-08-30 18:59:59 GMT+0200'],
    ['2016-08-30 19:00:00 GMT+0200', '2016-09-06 18:59:59 GMT+0200'],
    ['2016-09-06 19:00:00 GMT+0200', '2016-09-13 18:59:59 GMT+0200'],
    ['2016-09-13 19:00:00 GMT+0200', '2016-09-20 18:59:59 GMT+0200'],
    ['2016-09-20 19:00:00 GMT+0200', '2016-09-27 18:59:59 GMT+0200'],
    ['2016-09-27 19:00:00 GMT+0200', '2016-10-04 18:59:59 GMT+0200'],
];

// iterate over each element in the schedule
for(var i=0; i<schedule.length; i++){
  var startDate = schedule[i][0];
  var endDate = schedule[i][1];

  // put dates in milliseconds for easy comparisons
  var startMs = Date.parse(startDate);
  var endMs = Date.parse(endDate);
  var currentMs = Date.parse(new Date());

  // if current date is between start and end dates, display clock
  if(endMs > currentMs && currentMs >= startMs ){
      initializeClock('clockdiv', endDate);
  }
}
