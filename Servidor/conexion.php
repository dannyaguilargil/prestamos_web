<?php 

$mysqli = new mysqli("localhost", "danny", "danny", "prestamos");


if(!$mysqli) {
      echo "ERROR AL CONECTAR A LA BASE DE DATOS";
}
else{
 //echo "CONECTADO A LA BASE DE DATOS";
}
