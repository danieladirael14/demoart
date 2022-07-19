 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Arte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilos/registrate.css">
  </head>
  <body>
  	<center>
  		<br><br><br><br>
<br>

    <form action="envio.php" method="post">
          <br>
  <div class="col-9">
    <label for="exampleInputEmail1" class="form-label"><font color="white"><strong>INGRESE SU NOMBRE</strong></font></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">
  </div>
  <br>
  <div class="col-9">
    <label for="exampleInputPassword1" class="form-label"><font color="white"><strong>INGRESE SU APELLIDO</strong></font></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="apellido">
  </div>
  <br>
   <div class="col-9">
    <label for="exampleInputEmail1" class="form-label"><font color="white"><strong>INGRESE SU USUARIO</strong></font></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user">
  </div>
  <br>
  <div class="col-9">
    <label for="exampleInputPassword1" class="form-label"><font color="white"><strong>INGRESE SU CONTRASEÑA</strong></font></label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
  </div>
<br><br>
<div class="d-grid gap-2 col-9 mx-auto">

  <button type="submit" class="btn btn-danger btn-lg"><strong>ENVÍO</strong></button>
 </div>
 
  <br><br>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>