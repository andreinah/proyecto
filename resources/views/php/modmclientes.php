<?php
include ("conex.php");
$link = conectarse ();

$id=$_POST['inputid'];
$fecha=$_POST['inputfecha'];
$logo=$_POST['inputlogo'];
$nit=$_POST['inputnit'];
$rsocial=$_POST['inputrsocial'];
$empresa=$_POST['inputempresa'];
$actividad=$_POST['inputactividad'];
$direccion=$_POST['inputdireccion'];
$url=$_POST['inputurl'];
$tlf=$_POST['inputtlf'];
$sector=$_POST['inputsector'];
$subsector=$_POST['inputsubsector'];
$pais=$_POST['inputpais'];
$departamento=$_POST['inputdepartamento'];
$ciudad=$_POST['inputciudad'];
$barrio=$_POST['inputbarrio'];
$empleados=$_POST['inputempleados'];
$contacto=$_POST['inputcontacto'];
$tlfcontacto=$_POST['inputtlfcontacto'];
$email=$_POST['inputemail'];
$asesor=$_POST['inputasesor'];
$plazo=$_POST['inputplazo'];
$cupo=$_POST['inputcupo'];
$estado=$_POST['inputestado'];
$usuario=$_POST['inputusuario'];
$pass=$_POST['inputpass'];


mysqli_query($link, "UPDATE mclientes SET fecha='$fecha', logo='$logo', nit='$nit', rsocial='$rsocial', empresa='$empresa', actividad='$actividad', direccion='$direccion', url='$url', telefono='$tlf', sector='$sector', subsector='$subsector', pais='$pais', departamento='$departamento', ciudad='$ciudad', barrio='$barrio', nempleados='$empleados', contacto='$contacto', tlfcontacto='$tlfcontacto', email='$email', asesor='$asesor', plazo='$plazo', cupo='$cupo', estado='$estado', usuario='$usuario', pass='$pass' WHERE id ='$id'");

echo '<script language="javascript">alert("Datos de aplicacion actualizados con exito"); </script>';
//echo "<script>location.href='../html/maplicaciones.php';</script>";
?>