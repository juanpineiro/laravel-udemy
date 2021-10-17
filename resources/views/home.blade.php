@extends('layout')
@section('title','Home')
@section('content')
	<h1>Home</h1>
	Bienvenido {{ $nombre ?? "invitado"}}
</body>
</html>
@endsection('content')