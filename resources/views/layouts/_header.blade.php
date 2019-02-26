<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="https://weglot.com/wp-content/uploads/20181102121359/laravel-logo-150x150.png" alt="LaraBBS">
    </a>
    <a class="navbar-brand" href="{{ url('/') }}">LaraBBS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        @if (Auth::check())
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Users</a></li>

          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        @else
        <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">Help</a></li>
        <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        @endif

      </ul>
    </div>
  </div>
</nav>
