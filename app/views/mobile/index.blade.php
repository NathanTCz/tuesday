@extends('layouts.mobile')

@section('content')
  <span id="title"></span>
  <button id="play_pause" class="pause" data-now="playing"></button>
  <div class="clock"
    data-0="margin-top:0;font-size:16vmin;"
    data-150="margin-top:-50px;font-size:3vmin;"
  >
    <span id="time"></span>
  </div>
  <div class="feed">
  </div>

  <div class="input_bar">
    <span id="user_count"></span>
    <form id="chat" action="">
      <input id="m" placeholder="say something bruh" autocomplete="off" /><!--<button>Send</button>-->
    </form>
  </div>

  {{ HTML::script('http://connect.soundcloud.com/sdk.js') }}
  {{ HTML::script('js/countdown.js') }}
  {{ HTML::script('https://cdn.socket.io/socket.io-1.2.0.js') }}
  {{ HTML::script('js/chat.js') }}
@stop
