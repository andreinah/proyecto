<?php
include ("conex.php");
$link = conectarse ();

$id=$_POST['inputcodigo'];
$nombre=$_POST['inputnombre'];
$pago=$_POST['inputpago'];
$documentos=$_POST['inputdocumentos'];
$almacenamiento=$_POST['inputalmacenamiento'];
$empleados=$_POST['inputempleados'];

mysqli_query($link, "UPDATE aplicaciones SET nombre='$nombre', fpago='$pago', ndocumentos='$documentos', nalmacenamiento='$almacenamiento', nempleados='$empleados' WHERE codigo = '$id'");

echo '<script language="javascript">alert("Datos de aplicacion actualizados con exito"); </script>';
//echo "<script>location.href='../html/maplicaciones.php';</script>";
?>