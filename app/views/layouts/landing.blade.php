<!doctype html>
<html lang="en">
<head>
  {{ HTML::style('css/main.css') }}
  {{ HTML::script('js/jquery-2.1.1.min.js') }}
  {{ HTML::script('js/moment.min.js') }}
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57379303-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
  <div class="wrapper">
    @yield('content')
  </div>
</body>
</html>
