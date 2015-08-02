@extends('app')

@section('content')

<p>This is the contact page</p>

@if ($first == 'John')

<h4>Hi John</h4>

@else

<h4>No John</h4>

@endif

@stop

@section('footer')

<p>This is the footer</p>

@stop