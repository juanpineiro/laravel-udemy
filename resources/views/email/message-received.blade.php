<!DOCTYPE html>
<html>
<head>
	<title>Mensaje enviado</title>
</head>
<body>
	<h3>Contenido del email</h3>
	<p>Recibiste un mensaje de: {{$msg['name']}} - {{$msg['email']}}</p>
	<p><strong>Asunto:</strong>{{$msg['subject']}}</p>
	<p><strong>Contenido:</strong>{{$msg['content']}}</p>
</body>
</html>