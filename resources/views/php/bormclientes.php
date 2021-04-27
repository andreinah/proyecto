<?php
	include ("conex.php");
	$link= conectarse();
	$id= $_POST['inputid'];

	mysqli_query($link, "DELETE FROM mclientes WHERE id='$id'");

	echo '<script language="javascript">alert("Datos de la aplicacion eliminados con exito");</script>';
	//echo "<script>location.href='../html/maplicaciones.php';</script>";

	?>