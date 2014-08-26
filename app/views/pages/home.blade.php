@extends('layouts.default')

@section('content')
	<div class="jumbotron">
		<h1>Welcome to larabook!</h1>
		<p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>

		@if (! $currentUser)
			<p>
				{{ link_to_route('register_path', 'Sign Up!', null, ['class' => 'btn btn-lg btn-primary']) }}
			</p>
		@endif
	</div>
@stop