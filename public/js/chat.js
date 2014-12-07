function to_bottom() {
  $("html, body").animate({ scrollTop: $(document).height() }, "slow");
  return false;
}

var host = window.location.protocol + '//' + window.location.host + ':' + '8080';

var socket = io(host);

$('form').submit(function(){
  socket.emit('chat message', $('#m').val());
  $('#m').val('');
  return false;
});

socket.on('chat message', function(msg){
  //($('<span>').text(msg)).appendTo('.feed').addClass('animate').delay(20000).fadeOut(1500);
  ($('<span>').text(msg)).appendTo('.feed').delay(120000).queue(function(){
    $(this).addClass('animate').dequeue().delay(300).queue(function(){
      $(this).addClass('gone').dequeue();
    });
  });
  to_bottom();
});

socket.on('user conn', function(count){
  var tail;
  if (count == 0) {
    count = '';
    tail = 'noboby else here right now';
  }
  if (count == 1)
    tail = ' other person here right now';
  if (count > 1)
    tail = ' other people here right now';

  $('#user_count').html(count + tail);
});

socket.on('user disconn', function(count){
  var tail;
  if (count == 0) {
    count = '';
    tail = 'noboby else here right now';
  }
  if (count == 1)
    tail = ' other person here right now';
  if (count > 1)
    tail = ' other people here right now';

      $('#user_count').html(count + tail);
});
