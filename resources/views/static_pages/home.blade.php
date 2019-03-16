@extends('layouts.default')

@section('content')

  <!-- Page Content -->
  @if (Auth::check())
    <div class="row">
      <div class="col-md-3 shadow profile-sidebar">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
        <section class="stats mt-2">
          @include('shared._stats', ['user' => Auth::user()])
        </section>
      </div>


      <div class="col-md-9">
        <section class="status_form">
          @include('shared._status_form')

          <h4>Twitters</h4>
          <hr>
          @include('shared._feed')
        </section>
      </div>
    </div>

  @else
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">
        <h1 class="font-weight-light">Hello!</h1>
        <p class="lead">This is LaraBBS.</p>
        <p>
          <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Sign up now!</a>
        </p>

      </div>
    </div>
  @endif
@stop


