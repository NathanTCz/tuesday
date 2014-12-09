@extends('layouts.mobile')

@section('content')
  <span id="title"></span>
  <div class="clock" data-0="position:fixed;top:10%;left:10%;width:80%;font-size:12vmin;" data-150="position:fixed;top:0;left:0;margin:0;width:100%;font-size:3vw;">
    <button id="play_pause" class="pause" data-now="playing"></button>
    <span id="time"></span>
  </div>
  <div class="feed">
  </div>

  <div class="input_bar">
    <form id="chat" action="">
      <input id="m" placeholder="say something bruh" autocomplete="off" /><!--<button>Send</button>-->
    </form>
  </div>

  <span id="user_count"></span>

  {{ HTML::script('http://connect.soundcloud.com/sdk.js') }}
  {{ HTML::script('js/countdown.js') }}
  {{ HTML::script('https://cdn.socket.io/socket.io-1.2.0.js') }}
  {{ HTML::script('js/chat.js') }}
@stop
