<?php
	include ("conex.php");
	$link= conectarse();
	$id= $_POST['inputcodigo'];

	mysqli_query($link, "DELETE FROM compra WHERE codigo='$id'");

	echo '<script language="javascript">alert("Datos de la aplicacion eliminados con exito");</script>';
	//echo "<script>location.href='../html/maplicaciones.php';</script>";

	?>