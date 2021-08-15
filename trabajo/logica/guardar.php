<?php
 require 'conexion.php';
  
 $nombre  = $_POST['nombre'];
 $descripcion  = $_POST['descripcion'];
 $fecha = $_POST['fecha'];

$insertar = "INSERT INTO nota VALUES ('$nombre','$descripcion','$fecha') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../indexPrincipal.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../indexPrincipal.php';
    </script>";
}






?>