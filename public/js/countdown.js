function recalc() {
  var Now = moment();
  var next_tue = moment().day(2).startOf('day').add('days',7)

  diff = Now.diff(next_tue, 'seconds'),
  diff = Math.abs(diff);
  hours = Math.floor(diff / 3600),
  diff = diff - hours * 3600,
  minutes = Math.floor(diff / 60),
  seconds = diff - minutes * 60;

  (hours < 10) ? hours = '0' + hours : hours;
  (minutes < 10) ? minutes = '0' + minutes : minutes;
  (seconds < 10) ? seconds = '0' + seconds : seconds;

  countdown = hours + ':' + minutes + ':' + seconds;

  $('#time').html(countdown);
  setTimeout(function(){recalc();}, 1000);
}

recalc();
