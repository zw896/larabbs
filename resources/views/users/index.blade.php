@extends('layouts.default')
@section('title', 'All users')

@section('content')
<div class="offset-md-2 col-md-8 shadow mx-5">
  <h2 class="pt-5 mb-5 text-center">All Users</h2>
  <div class="list-group list-group-flush">
    @foreach ($users as $user)
      @include('users._user')
    @endforeach
  </div>

  <div class="mt-3">
    {!! $users->render() !!}
  </div>
</div>
@stop
