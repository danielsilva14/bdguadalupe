<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'db_gpe');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>