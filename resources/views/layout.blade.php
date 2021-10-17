<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Testing Title')</title>
	<style type="text/css">
		li.active a{
			text-decoration: none;
			color:#f00;
		}
	</style>
</head>
<body>
@include('partials.nav')
@yield('content')