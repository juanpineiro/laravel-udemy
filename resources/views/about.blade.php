@extends('layout')
@section('title','About')
@section('content')
	<h1>About</h1>
	Bienvenido {{ $nombre ?? "invitado"}}
</body>
</html>
@endsection('content')