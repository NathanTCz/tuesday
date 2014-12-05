<!doctype html>
<html lang="en">
<head>
  {{ HTML::style('css/main.css') }}
  {{ HTML::script('js/jquery-2.1.1.min.js') }}
  {{ HTML::script('js/moment.min.js') }}
  {{ HTML::script('js/ga.js') }}
</head>
<body>
  <div class="wrapper">
    @yield('content')
  </div>
</body>
</html>
