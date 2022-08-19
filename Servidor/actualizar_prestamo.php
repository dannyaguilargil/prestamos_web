<?php

include 'conexion.php';


/* update prestamos set cuotaactual=1,abono=20000,saldopendiente=(120000-abono) WHERE cedula=748; */
// SELECT saldopendiente from prestamos where cedula=748; 
// UPDATE prestamos SET cuotaactual=2,abono=abono+20000 WHERE cedula=748
$cedulas = $_POST['cedulas'];
//$cuotactual = $_POST['cuotaactual'];
$abono = $_POST['abono'];
// necesito tomar del formulario el saldo pendiente segun la cedula
//$saldopendiente = $valorcredito;
// saldo pendiente es igual al valor credito - abono



// queda pendiente saldo pendiente
$sql="UPDATE prestamos SET cuotaactual=cuotaactual+1,abono=abono+$abono,saldopendiente=saldopendiente-$abono WHERE cedula=$cedulas";

$resultado=$mysqli ->query($sql);

if($resultado>0){
 header("Location:../cliente/Vistas/prestamos.php");
 
 //exit();
 
 }else{
     echo 'ERROOR AL AGREGAR REGISTRO';
 }
 

?>