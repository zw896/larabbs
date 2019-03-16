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



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">Info</a>
              <a class="dropdown-item" href="{{ route('users.edit', Auth::user()) }}">Edit</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" id="logout" href="#">
                <form action="{{ route('logout') }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button class="btn btn-block btn-danger" type="submit" name="button">Log out</button>
                </form>
              </a>
            </div>
          </li>



        @else
        <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">Help</a></li>
        <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        @endif

      </ul>
    </div>
  </div>
</nav>
