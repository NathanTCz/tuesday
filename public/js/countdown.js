function recalc() {
  var Now = moment().day(2);

  if ( Now.day() < 2 )
    var next_tue = moment().day(2).startOf('day');
  else
    var next_tue = moment().day(2).startOf('day').add(7, 'days');

  diff = Now.diff(next_tue, 'seconds');
  diff = Math.abs(diff);
  hours = Math.floor(diff / 3600);
  diff = diff - hours * 3600;
  minutes = Math.floor(diff / 60);
  seconds = diff - minutes * 60;

  (hours < 10) ? hours = '0' + hours : hours;
  (minutes < 10) ? minutes = '0' + minutes : minutes;
  (seconds < 10) ? seconds = '0' + seconds : seconds;

  countdown = hours + ':' + minutes + ':' + seconds;


  if( Now.day() != 2 ) {
    $('#title').html('The club is going up in approximately:');
    $('#time').html(countdown);
    setTimeout(function(){recalc();}, 1000);
  }
  else {
    $('#play_pause').attr('style', 'display:block');

    SC.initialize({
      client_id: 'ab4ba14254ae14869f7c52233f290082'
    });

    // stream track id 162779883
    SC.stream("/tracks/162779883", function(sound){
      var song = sound;
      song.play();

      $('#play_pause').click(function(){
        if ( $(this).data('now') == 'paused') {
          song.play();
          $(this).data('now', 'playing');
          $(this).attr('class', 'pause');
        }
        else if ( $(this).data('now') == 'playing') {
          song.pause();
          $(this).data('now', 'paused');
          $(this).attr('class', 'play');
        }
      });
    });

    $('#title').html('Got the club goin up...');
    $('#time').html("On a fucking Tuesday");
  }
}

recalc();
