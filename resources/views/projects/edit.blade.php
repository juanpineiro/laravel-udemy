@extends('layout')
@section('title','Editar Proyecto')
@section('content')
	<h1>Editar nuevo proyecto</h1>

	@include('partials.validation-errors')

	<form method="POST" action="{{route('projects.update',$project )}}">
		@method('PATCH')

		@include('projects._form' , ['btnText'=>'Actualizar'])

	</form>
@endsection('content')