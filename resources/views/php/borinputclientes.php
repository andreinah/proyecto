<?php
	include ("conex.php");
	$link= conectarse();
	$id= $_POST['inputcodigo'];

	mysqli_query($link, "DELETE FROM cliente WHERE id='$id'");

	echo '<script language="javascript">alert("Datos eliminados con exito");</script>';
	//echo "<script>location.href='../html/maplicaciones.php';</script>";

	?>