<?php
include ("cn.php");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$user = $_POST['user'];
$password = $_POST['password'];

$insertar="insert into datos (nombre, apellido, user, password) values ('$nombre', '$apellido', '$user', '$password')";

$query=mysqli_query($conn, $insertar);

if(!$query)
{
	echo $insertar;
}
else
{
	/*echo $insertar;*/
echo "<script>alert('Formulario Enviado');window.location.href = '../index.php';
     ;</script>";
}
mysqli_close($conn);
?>