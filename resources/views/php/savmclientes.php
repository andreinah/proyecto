<?php
include ("conex.php");
$link=conectarse();

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

mysqli_query($link, "INSERT INTO `mclientes` ('fecha', 'logo', 'nit', 'rsocial', 'empresa', 'actividad', 'direccion', 'url', 'telefono', 'sector', 'subsector', 'pais', 'departamento', 'ciudad', 'barrio', 'nempleados', 'contacto', 'tlfcontacto', 'email', 'asesor', 'plazo', 'cupo', 'estado', 'usuario', 'pass') VALUES ('$id', '$fecha', '$logo', '$nit', '$rsocial', '$empresa', '$actividad', '$direccion', '$url', '$tlf','$sector', '$subsector', '$pais', '$departamento', '$ciudad', '$barrio', '$empleados', '$contacto', '$tlfcontacto', '$email', '$asesor', '$plazo', '$cupo','$estado', '$usuario', '$pass')");

echo '<script language="javascript">alert("Datos registrados con exito");</script>';
//echo "<script>location.href='../html/maplicaciones.php';</script>"
?>
