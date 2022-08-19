<?php

$nombre = $_POST['nombre'];
$password = $_POST['password'];

if ($nombre=='admin'){
    header("Location:../cliente/Vistas/principal.html");
}else{
    echo "ACCESO DENEGADO";
}