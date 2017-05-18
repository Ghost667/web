<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Rutas de la Aplicación</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="flex-center position-ref full-height">
	<div class="container content">
		<h1>Pantallas del Sistema</h1>
		<hr>
		<a class="btn btn-default" href="{{ url('/inicio') }}" role="button">Inicio</a>
		<a class="btn btn-default" href="{{ url('/login') }}" role="button">Iniciar Sesión</a>
		<a class="btn btn-default" href="{{ url('/register') }}" role="button">Registrarse</a>
		<a class="btn btn-danger" href="{{ url('/inicio/sistema') }}" role="button">Inicio | Sistema</a>
		<a class="btn btn-default" href="{{ url('/knowledge') }}" role="button">Knowledge</a>
		<a class="btn btn-default" href="{{ url('/login/confirmation') }}" role="button">Confirmar Inicio de Sesión</a>
		<a class="btn btn-default" href="{{ url('/inicio/casos') }}" role="button">Sistema de Casos | Inicio</a>
		<a class="btn btn-danger" href="{{ url('/ticket') }}" role="button">Ticket | Informacion General</a>
		<a class="btn btn-danger" href="{{ url('/dashboard') }}" role="button">Dashboard</a>
	</div>
	<script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>