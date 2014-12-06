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
  ($('<span>').text(msg)).appendTo('.feed').addClass('animate');
  to_bottom();
});

socket.on('user conn', function(count){
  var tail = (count > 1) ? ' people here right now' : ' person here right now';
  $('#user_count').html(count + tail);
});

socket.on('user disconn', function(count){
  var tail = (count > 1) ? ' people here right now' : ' person here right now';
  $('#user_count').html(count + tail);
});
