@extends('layout')
@section('title','Portfolio')
@section('content')
	<h1>Portfolio</h1>
	<ul>
		@isset($portfolio)
			@foreach($portfolio as $portfolioItem)
		<li>{{$portfolioItem['title']}}</li>
			@endforeach
		@else
			<li>No hay proyectos para mostrar</li>
		@endisset

	@forelse($portfolio as $portfolioItem)
		<li>{{$portfolioItem['title']}}</li>
		<pre>{{var_dump($loop)}}</pre>
	@empty
		<li>No hay proyectos para mostrar</li>
	@endforelse
	</ul>
</body>
</html>
@endsection('content')