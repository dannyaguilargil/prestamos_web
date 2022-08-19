<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
//$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
//$imagen = $_POST['imagen'];

$sql="INSERT INTO personas (nombre,cedula,direccion,telefono) VALUES('$nombre',$cedula,'$direccion','$telefono')";

$resultado=$mysqli ->query($sql);

if($resultado>0){
  //echo 'REGISTRO AGREGADO';
 header("Location:../cliente/Vistas/registros.php");
 
 //exit();
 
 }else{
     echo 'ERROOR AL AGREGAR REGISTRO';
 }
 

?>