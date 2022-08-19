<?php

include 'conexion.php';

$cedula = $_POST['cedula'];
$fecha = $_POST['fecha'];
$cuotaspactadas = $_POST['cuotaspactadas'];
$valorcredito = $_POST['valorcredito'];
$valorprestado = $_POST['valorprestado'];
$saldopendiente = $valorcredito;



//$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
//$imagen = $_POST['imagen'];

$sql="INSERT INTO prestamos (cedula,fecha,cuotaspactadas,valorcredito,valorprestado,saldopendiente) VALUES($cedula,'$fecha',$cuotaspactadas,$valorcredito,$valorprestado,$saldopendiente)";
//AQUI DESEO REGISTRARLO EN LA CONTABILIDAD
$sql2="INSERT INTO contabilidad (cedula,fecha) VALUES($cedula,'$fecha')";
$sql3="UPDATE contabilidad SET saldoganado=$valorcredito-$valorprestado WHERE cedula=$cedula";

//UPDATE contabilidad SET saldoganado=200000-150000 WHERE cedula=748
$resultado=$mysqli ->query($sql);
$resultado2=$mysqli ->query($sql2);
$resultado3=$mysqli ->query($sql3);

if($resultado>0){
 header("Location:../cliente/Vistas/prestamos.php");
 
 //exit();
 
 }else{
     echo 'ERROOR AL AGREGAR REGISTRO';
 }
 

?>