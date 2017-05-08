<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Administrador</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<script type="text/javascript">
		function ir($user)
		{
			alert($user);
		}
		function enviar()
		{
			valor=document.getElementById['SoyTuId'].value;
			alert(valor);		 
		}

	</script>
</head>

<body class="flex-center position-ref full-height">

	<div class="container content">
		<h1>Administrador</h1>
		<hr>
			<table class="table table-striped table-bordered">
	            <thead>
	            <tr>
	                <th style="text-align: center">#</th>
	                <th style="text-align: center">Nombre</th>
	                <th style="text-align: center">Email</th>
	                <th style="text-align: center">Telefono</th>
	                <th style="text-align: center">Celular</th>
	                <th style="text-align: center">Tipo de usuario</th>
	                <th style="text-align: center">Región</th>
	                <th style="text-align: center">País</th>
	                <th style="text-align: center">Confirmar</th>
	            </tr>
	            </thead>
				<tbody>
				<?php 
					$users = DB::table('registerusers')->where(['status'=>'pendiente'])->get();
					$r = 0;
				?>
	                @foreach($users as $user)
	                    <tr>
	                        <td><?php $r = ($r + 1); echo $r; ?></td>
	                        <td>{{ $user->name }} {{ $user->lastname }}</td>
	                        <td>{{ $user->email }}</td>
	                        <td>{{ $user->telephone }}</td>
	                        <td>{{ $user->cellphone }}</td>
	                        <td>{{ $user->typeuser }}</td>
	                        <td>{{ $user->region }}</td>
	                        <td>{{ $user->country }}</td>
	                        <td>
                            	<a class="btn btn-success" href="{{ url('/inicio') }}" role="button">
                            		<span class="glyphicon glyphicon-ok"> </span> </a> 
                            	<a class="btn btn-danger" href="{{ url('/show') }}" role="button">
                            		<span class="glyphicon glyphicon-remove"> </span> </a> 
                            	<button value="esto es un boton" onclick="ir($user->id)"/>
                            	<input type="summit" id="SoyTuId" value="<?php echo"$user->id"; ?>">
                        	</td>
	                    </tr>
	                @endforeach
	            </tbody>
	        </table>
	</div>
	<script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>