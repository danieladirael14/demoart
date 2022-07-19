<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Art</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos/login.css">
  </head>
  <body>
    <br><br><br><br>
    <!--Login-->
    <center>
      <h1><strong>Universidad de Guayaquil</strong></h1>
        <br><br><br>
        <form action="vistas/proceso.php" method="POST">
          <br><br>
  <div class="col-9">
    <label for="exampleInputEmail1" class="form-label"><font color="white"><strong>USUARIO</strong></font></label>
    <input type="text" class="form-control" name="user" required>
  </div>
  <br>
  <div class="col-9">
    <label for="exampleInputPassword1" class="form-label"><font color="white"><strong>CONTRASEÑA</strong></font></label>
    <input type="password" class="form-control" name="password" required>
  </div>
<br><br>
<div class="d-grid gap-2 col-9 mx-auto">

  <button type="submit" class="btn btn-danger btn-lg">Login</button>
 </div><br>
  <strong/> <font color="white">¿No tienes una cuenta? -> <a href="vistas/registro.php">Regístrate</a></font>
  <br><br>
</form>

    </center>
    <!--Fin de Login-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>