<?php

session_start();



$user = $_POST['user'];

$password = $_POST['password'];



	$mysqli = new mysqli("localhost","root","","arte"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

	$mysqli->set_charset('utf8');

	

	if(mysqli_connect_errno()){

		echo 'Conexion Fallida : ', mysqli_connect_error();

		exit();

	}
$sql_query="SELECT * FROM datos WHERE user='$user' and password='$password'";


  $resultado = $mysqli->query( $sql_query );



        if ( $resultado->num_rows > 0 ) {

        $rowM = $resultado->fetch_assoc();

        

            session_start();

            $_SESSION['INGRESO'] = 'YES';

          

         

            header('Location:principal.php');

        }

        else
        {


          echo "<script>alert('Verifique los datos ingresados');window.location.href = '../index.php';

;</script>";
           // header('Location: index.php');
                        echo mysqli_error($mysqli);

        }

?>
