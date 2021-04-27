<?php
include ("conex.php");
$link = conectarse ();

$pass=$_POST['inputpass'];
$id=$_SESSION['id'];


mysqli_query($link, "UPDATE usuario SET pass='$pass' WHERE id ='$id'");

echo '<script language="javascript">alert("Datos de aplicacion actualizados con exito"); </script>';
//echo "<script>location.href='../html/maplicaciones.php';</script>";
?>