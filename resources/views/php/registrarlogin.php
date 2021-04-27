<?php
include ("conex.php");
$link=conectarse();

$nombre= $_GET['regnombre'];
$usuario= $_GET['regusuario'];
$pass= $_GET['regpass'];

mysqli_query($link, "INSERT INTO login SET nombre='$nombre', usuario='$usuario', pass='$pass'");
echo '<script language="javascript">alert("Usuario registrado con exito");</script>';
echo "<script>location.href='../html/loginperfil.php';</script>";
?>
