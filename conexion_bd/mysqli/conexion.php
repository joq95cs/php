<?php 

	$conexion = new mysqli('localhost', 'root', '', 'world');

	if($conexion->connect_errno) { /*Regreso 0 si no hay errores*/

		die('Problema del servidor');

	} else {

		
	}