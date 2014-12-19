<!doctype html>
<html lang="en">
<head>
  <meta name=viewport content="width=device-width, initial-scale=1">
  
  {{ HTML::style('css/mobile.css') }}
  {{ HTML::script('js/jquery-2.1.1.min.js') }}
  {{ HTML::script('js/moment.min.js') }}
  {{ HTML::script('js/ga.js') }}
</head>
<body>
  <div class="wrapper">
    @yield('content')
  </div>
  {{ HTML::script('js/skrollr.min.js') }}
  <script>
    // var s = skrollr.init({
    //   smoothScrolling: false,
    //   mobileDeceleration: 0.004
    // });
  </script>
</body>
</html>
