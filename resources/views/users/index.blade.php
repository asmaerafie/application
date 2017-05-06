@extends('layouts.app')

@section('title')
Users listing
@endsection

@section('content')
    <form method="POST" action="{!! url('users') !!}" >
        <label for="nom"> nom : </label><input name="nom" type="text" id="nom"/>      
        <label for="email">Email :</label><input type="text" id="email" name="email"/>
        <input type="submit" value="ajouter !">   
    </form>
@endsection

@foreach ($users as $user)
    <p>User {{ $user->id}} - {{$user->name}} - {{$user->email}}</p>

@endforeach
