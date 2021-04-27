<?php
function conectarse(){

	$servidor="localhost";
	$usuario= "root";
	$pass="";
	
	$link = mysqli_connect($servidor,$usuario,$pass);
	
		if (!$link) {
			echo "Error en la conexion a la base de datos";
		}
		if (!mysqli_select_db($link, "formularios")){
			echo "La base de datos no existe";
			}
	mysqli_set_charset($link, 'utf8');
	return $link;
	}
?>
