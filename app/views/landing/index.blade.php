@extends('layouts.landing')

@section('content')
  <span id="title">The club is going up in approximately:</span>
  <div class="clock" data-0="position:fixed;top:15vh;left:10%;width:80%;font-size:12vw;" data-150="position:fixed;top:0;left:0;margin:0;width:100%;font-size:3vw;">
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
  {{ HTML::script('js/chat.js') }}
@stop
