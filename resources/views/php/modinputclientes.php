<?php
include ("conex.php");
$link = conectarse ();

$id=$_POST['id']
$procesos=$POST['inputprocesos'];
$subprocesos=$_GET['inputsubprocesos'];
$actividad=$_GET['inputactividad'];
$sedes=$_GET['inputsedes'];
$maquina=$_GET['inputmaquina'];
$bodega=$_GET['inputbodega'];
$empleado=$_GET['inputempleado'];
$cargo=$_GET['inputcargo'];
$area=$_GET['inputarea'];
$proceso=$_GET['inputproceso'];
$email=$_GET['inputemail'];
$tlf=$_GET['inputtlf'];


mysqli_query($link, "UPDATE cliente SET proceso='$procesos', subproceso='$subprocesos', actividad='$actividad', sedes='$sedes', maquina='$maquina', bodega='$bodega', empleado='$empleado', cargo='$cargo' , area='$area', procesoempleado='$proceso', email='$email' , telefono='$tlf' WHERE id = '$id'");

echo '<script language="javascript">alert("Datos de aplicacion actualizados con exito"); </script>';
//echo "<script>location.href='../html/maplicaciones.php';</script>";
?>