<?php
include ("conex.php");
$link=conectarse();

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$pago=$_POST['pago'];



mysqli_query($link, "INSERT INTO `aplicaciones` (`codigo`, `nombre`, `fpago`) VALUES ('$codigo', '$nombre', '$pago')");

echo '<script language="javascript">alert("Aplicacion registrada con exito");</script>';
//echo "<script>location.href='../html/maplicaciones.php';</script>"
?>
