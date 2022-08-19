<?php
//delete from prestamos where cedula=444

include 'conexion.php';


$cedular = $_POST['cedular'];



$sql="DELETE from prestamos where cedula=$cedular";

$resultado=$mysqli ->query($sql);

if($resultado>0){
 header("Location:../cliente/Vistas/prestamos.php");
 
 //exit();
 
 }else{
     echo 'ERROOR AL AGREGAR REGISTRO';
 }
 

?>