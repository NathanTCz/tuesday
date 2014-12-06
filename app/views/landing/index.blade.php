@extends('layouts.landing')

@section('content')
  <span id="title">The club is going up in approximately:</span>
  <div class="clock">
    <span id="time"></span>
  </div>
  <div class="feed">
  </div>

  <div class="input_bar">
    <form id="chat" action="">
      <input id="m" placeholder="say something bruh" autocomplete="off" /><!--<button>Send</button>-->
    </form>
  </div>

  {{ HTML::script('js/countdown.js') }}
  {{ HTML::script('https://cdn.socket.io/socket.io-1.2.0.js') }}
  <script>
  function to_bottom() {
    $("html, body").animate({ scrollTop: $(document).height() }, "slow");
    return false;
  }

  var socket = io('http://localhost:8080');

  $('form').submit(function(){
    socket.emit('chat message', $('#m').val());
    $('#m').val('');
    return false;
  });
  socket.on('chat message', function(msg){
    console.log(msg);
    ($('<span>').text(msg)).appendTo('.feed').addClass('animate');
    to_bottom();
  });
  </script>
@stop
