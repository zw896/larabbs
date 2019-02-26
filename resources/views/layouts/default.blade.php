<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'LaraBBS')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>

  <body>

    @include('layouts._header')

    @yield('content')

  <script src="/js/app.js"></script>
  </body>
</html>
