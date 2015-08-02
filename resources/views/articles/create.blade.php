@extends('app')

@section('content')

<h1>Write a new article</h1>

<hr>

{!!  Form::open(['url' => 'articles']) !!}
	
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title') !!}
	
	{!! Form::label('body', 'Body:') !!}
	{!! Form::textarea('body') !!}

	{!! Form::label('publish_at', 'Published On:') !!}
	{!! Form::input('date', 'publish_at', date('Y-m-d')) !!}	

	{!! Form::submit('Add Article', ['class' => 'button button-primary radius'] ) !!}


{!!  Form::close() !!}

@stop