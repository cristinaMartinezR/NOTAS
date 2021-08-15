<?php
$servidor = "localhost";
$usuario= "root";
$password = "";
$basededatos="login";

$con = mysqli_connect($servidor, $usuario, $password,$basededatos);
if (!$con) {
      print("fallo la conexion: " . mysqli_connect_error());
}
?>