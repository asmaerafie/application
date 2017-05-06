@extends('layouts.app')

@section('title')
Users listing
@endsection

@section('content')
<h1>ajouter utilisateur</h1>
{!!Form::open(['url'=>route('news.store')])!!}
<div class="form-group">
{!!Form::label('name','name')!!}
{!!Form::text('name','null',['class'=>'form-control'])!!}
</div>
<div class="form-group">
{!!Form::label('email','email')!!}
{!!Form::text('email','null',['class'=>'form-control'])!!}
</div>>
<button class="btn btn-primary">ajouter</button>
{!!Form::close()!!}
@endsection
