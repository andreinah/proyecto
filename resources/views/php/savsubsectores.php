<?php
include ("conex.php");
$link=conectarse();

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$pago=$_POST['pago'];
$documentos=$_POST['documentos'];
$almacenamiento=$_POST['almacenamiento'];
$empleados=$_POST['empleados'];


mysqli_query($link, "INSERT INTO `subsectores` (`nombre`,) VALUES ('$codigo', '$nombre', '$pago', '$documentos', '$almacenamiento', '$empleados')");

echo '<script language="javascript">alert("Aplicacion registrada con exito");</script>';
//echo "<script>location.href='../html/maplicaciones.php';</script>"
?>
