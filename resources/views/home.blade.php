@extends('layouts.master')

@section('content')

<nav class="nav navbar-nav navbar-right">
  <form class="form-inline" method="post" action="{{ route('logout') }}">

      {{ csrf_field() }}
      
    <button class="btn btn-success" type="submit"> logout</button>
  </form>
</nav>

@stop