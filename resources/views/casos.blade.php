<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Iniciar sesion</title>
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<br><br>
    <div class="container">
      <center>
      	<h1>Nuevo Caso</h1>
		<form>
			<div class="form-group">
				<label for="textAreaForm">Descripcion del Problema</label>
				<textarea id="textAreaForm" class="form-control" rows="3"></textarea>
			</div>
			<div class="form-group">
              <label for="user">Prioridad</label>
              <select class="form-control" id="user">
                  <option>Alta</option>
                  <option>Media</option>
                  <option>Baja</option>
                </select>
            </div>
			<div class="form-group">
			<label for="exampleInputFile">Capturas de Pantalla</label>
			<input type="file" id="exampleInputFile">
			<p class="help-block">Max Load File: 1MB</p>
			</div>
			<div class="checkbox">
			<label>
			<input type="checkbox"> Recibir actualizaciones de cambios en informe
			</label>
			</div>
			<button type="submit" class="btn btn-default">Enviar</button>
		</form>
      </center>
    </div>
  <script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>