@extends('layout')
@section('title','Proyectos')
@section('content')
	<h1>Proyectos</h1>
	<a href="{{ route('projects.create')}}">Crear nuevo proyecto</a>
	<ul>
		@isset($projects)
			@foreach($projects as $project)
		{{-- <li>{{ $project->title }}<br>{{ $project->descripcion }}<br>Publicado el: {{ $project->created_at->format('d-m-Y')}} | {{ $project->created_at->diffForHumans()}}</li> --}}
		<li><a href="{{ route('projects.show',$project) }}" target="_self">{{ $project->title }}</a></li>
			@endforeach
		@else
			<li>No hay proyectos para mostrar</li>
		@endisset
	</ul>
	{{$projects->links()}}
</body>
</html>
@endsection('content')