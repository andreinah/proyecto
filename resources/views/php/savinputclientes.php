<?php
include ("conex.php");
$link=conectarse();


$procesos=$_GET['procesos'];
$subprocesos=$_GET['subprocesos'];
$actividad=$_GET['iactividad'];
$sedes=$_GET['isedes'];
$maquina=$_GET['imaquina'];
$bodega=$_GET['ibodega'];
$empleado=$_GET['iempleado'];
$cargo=$_GET['icargo'];
$area=$_GET['iarea'];
$proceso=$_GET['iproceso'];
$email=$_GET['iemail'];
$tlf=$_GET['itlf'];


mysqli_query($link, "INSERT INTO `cliente` (`proceso`, `subproceso`, `actividad`, `sedes`, `maquina`, `bodega`, 'empleado', 'cargo', 'area', 'procesoempleado', 'email', 'telefono') VALUES ('$procesos', '$subprocesos', '$actividad', '$sedes', '$maquina', '$bodega', '$empleado', '$cargo', '$area', '$proceso', '$email', '$tlf')");

echo '<script language="javascript">alert("Datos registrados con exito");</script>';
//echo "<script>location.href='../inputclientes.php';</script>"
?>
