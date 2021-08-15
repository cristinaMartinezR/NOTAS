<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: indexPrincipal.php');
    }else{
        header('location: login.php');
    }


?>