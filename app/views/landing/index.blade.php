@extends('layouts.landing')

@section('content')
  <span id="title">The club is going up in approximately:</span>
  <div class="clock">
    <span id="time"></span>
  </div>

  {{ HTML::script('js/countdown.js') }}
@stop
