@extends('layouts.landing')

@section('content')
  <span id="title">The club is going up in approximately:</span>
  <div class="clock">
    <span id="time"></span>
  </div>
  <div class="feed">
  </div>

  <form action="">
    <input id="m" autocomplete="off" /><button>Send</button>
  </form>

  {{ HTML::script('js/countdown.js') }}
  {{ HTML::script('https://cdn.socket.io/socket.io-1.2.0.js') }}
  <script>
  var socket = io('http://localhost:3000');

  $('form').submit(function(){
    socket.emit('chat message', $('#m').val());
    $('#m').val('');
    return false;
  });
  socket.on('chat message', function(msg){
    console.log(msg);
    $('.feed').append($('<li>').text(msg));
  });
  </script>
@stop
