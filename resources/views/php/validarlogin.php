<?php
session_start();
require("conex.php");
$link=conectarse();

	$usuario=$_GET['logusuario'];
	$pass=$_GET['logpass'];

	$sql=mysqli_query($link,"SELECT * FROM login WHERE usuario='$usuario'");
	if ($f=mysqli_fetch_array($sql)){
		if ($pass==$f['pass']){
			$_SESSION['id']=$f['id'];
			$_SESSION['usuario']=$f['usuario'];
			header("location: ../loginperfil.php");
		}else{
			echo '<script>alert("Datos ingresados invalidos, por favor intente nuevamente")</script>';
			echo "<script>location.href='../login.php'</script>";
		}
	}else{
			echo '<script>alert("Datos ingresados invalidos, por favor intente nuevamente")</script>';
			echo "<script>location.href='../login.php'</script>";
	}

