<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'LaraBBS')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>

  <body>

    @include('layouts._header')

    <div class="container">
      <div class="container-list offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
      </div>
    </div>

    @include('layouts._footer')

  <script src="/js/app.js"></script>
  </body>
</html>
