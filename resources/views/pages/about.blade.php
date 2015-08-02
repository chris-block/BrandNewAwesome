@extends('app')

@section('content')

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo debitis, delectus, libero perspiciatis deleniti sequi enim officiis doloribus assumenda quos placeat. Eaque officia delectus dolore voluptatum commodi modi aut amet!</p>

	@if (count($people))

	<h3>These are poeple that I like:</h3>

	<ul>
		
	@foreach ($people as $person)
	
		<li>{{ $person }}</li>

	@endforeach

	</ul>

	@endif
@stop