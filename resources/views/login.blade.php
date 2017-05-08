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
      <center>
          <form id="form" name="form" class="form-horizontal" method="POST" 
          action='/user'>
          <div class="col-sm-5 input-group"><h1>Login</h1></div>
        <br><br>
            <div class="form-group">
              <label class="control-label col-sm-3" for="email">Email:</label>
              <div class="col-sm-6 input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa el email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Password:</label>
              <div class="col-sm-6 input-group"> 
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="password" id="password" placeholder="Ingresa la contraseña">
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
              <br>
                <button  type="submit" name="loginn" class="btn btn-primary">Entrar</button>
                <button type="submit" class="btn btn-success">Registrarse</button>
              </div>
            </div>

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

          </form>
      </center>
    </div>
  <script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>