@extends('blog::layouts.master')

@section('content')

	<div id="app">
		<example-component> </example-component>
		<h1>Hello World</h1>

		<p>
			This view is loaded from module: {!! config('blog.name') !!}
		</p>
	</div>

@stop
