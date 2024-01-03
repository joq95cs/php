<?php 

	#NO SE RECOMIENDA, ES UNA FORMA ANTIGUA
	$conexion = mysql_connect('127.0.0.1', 'root', '') or die('No se pudo conectar a la base de datos'); #Si no hay conexión se mata la ejecución de la página

	mysql_select_db('world', $conexion);

	$result_set = mysql_query("SELECT * FROM city where CountryCode = 'MEX'");

	/*$fila = mysql_fetch_object($result_set);

	echo $fila->Name;*/

	while($fila = mysql_fetch_object($result_set)) {

		echo $dila->Name . '<br>';
	}

	while($fila = mysql_fetch_array($result_set)) {

		echo $fila['Name'] . '<br>';
	}

 ?>