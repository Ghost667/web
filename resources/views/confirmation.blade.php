<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Iniciar sesion</title>
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body background="{{ asset('images/background1.jpg') }}" class="body">
<br><br>
    <div class="container">
      <div class="alert alert-warning" role="alert"> <span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> <span class="sr-only">Error:</span>Necesitas volver a iniciar sesión para continuar</div>
      <center>
          <form class="form-horizontal">
          <div class="col-sm-5 input-group"><h1>Login</h1></div>
        <br><br>
            <div class="form-group">
              <label class="control-label col-sm-3" for="email">Email:</label>
              <div class="col-sm-6 input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" id="email" placeholder="Ingresa el email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Password:</label>
              <div class="col-sm-6 input-group"> 
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="pwd" placeholder="Ingresa la contraseña">
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
              <br>
                <button type="submit" class="btn btn-primary">Entrar</button>
                <button type="submit" class="btn btn-success">Registrarse</button>
              </div>
            </div>
          </form>
      </center>
    </div>
  <script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>