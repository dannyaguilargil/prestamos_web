<?php

include 'conexion.php';

$barrio = $_POST['barrio'];
$cliente = $_POST['cliente'];
$gastos = $_POST['gastos'];
$monto = $_POST['monto'];
$fecha = $_POST['fecha'];


$sql="INSERT INTO rutas (barrio,cliente,gastos,monto,fecha) VALUES('$barrio','$cliente','$gastos',$monto,'$fecha')";

$resultado=$mysqli ->query($sql);

if($resultado>0){
  //echo 'REGISTRO AGREGADO';
 header("Location:../cliente/Vistas/rutas.php");
 
 //exit();
 
 }else{
     echo 'ERROOR AL AGREGAR REGISTRO';
 }
 

?>