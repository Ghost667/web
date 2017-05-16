<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="body">
    <div class="container">
      <center>
          <form id="form1" name="form1" class="form-horizontal" method="POST" action='/registerUser'> 
          <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
          <div class="col-sm-5 input-group"><h1 >Registro</h1></div>
        <br><br>
        <div class="form-group">
              <label class="control-label col-sm-3" for="name">Nombre:</label>
              <div class="col-sm-6 input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa el nombre">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="apep">Apellidos:</label>
              <div class="col-sm-6 input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name ="apep" id="apep" placeholder="Ingresa los apellidos">
              </div>
            </div>
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
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Ingresa la contraseña">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="telephone">Telefono:</label>
              <div class="col-sm-6 input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Ingresa el telefono">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="cellphone">Celular:</label>
              <div class="col-sm-6 input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" class="form-control" name="cellphone" id="cellphone" placeholder="Ingresa el celular">
                
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="user">Tipo de usuario:</label>
              <div class="col-sm-6 input-group">
              <select class="form-control" name ="user" id="user">
                  <option value="Novato">Novato</option>
                  <option value="Principiante">Principiante</option>
                  <option value="Avanzado">Avanzado</option>
                  <option value="Experto">Experto</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="region">Región:</label>
              <div class="col-sm-6 input-group">
                <select class="form-control" name ="region" id="region">
                  <option value="Mexico">Mexico</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="country">País:</label>
              <div class="col-sm-6 input-group">
                <select class="form-control" name="country" id="country">
                  <option value="Alemania">Alemania</option>
                  <option value="Finlandia">Finlandia</option>
                  <option value="Mexico">México</option>
                  <option value="Rusia">Rusia</option>
                </select>
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
              <br>
                <button type="submit" class="btn btn-success">Registrarse</button>
              </div>
            </div>
          </form>
      </center>
    </div>
   <script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
  <script src="{{ asset('js/parallax.js') }}"></script>
</body>
</html>