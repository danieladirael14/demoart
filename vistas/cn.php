<?php
$servername = "localhost";
$database = "arte";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, 'utf8'); //linea a colocar
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

?>