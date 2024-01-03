<?php

	$conexion = new mysqli('localhost', 'root', '', 'world');

	if($conexion->connect_errno) { /*Regreso 0 si no hay errores*/

		die('Problema del servidor');

	} else {

		$id = isset($_GET['id']) ? $_GET['id'] : 1;

		$sql = 'SELECT * FROM city WHERE ID = ' . $id;
		$rs = $conexion->query($sql);

		if($rs->num_rows) { //Si es diferente a 0

			/*echo '<pre>';

			var_dump($rs->fetch_assoc()); #Una fila del resultado en forma de array

			var_dump($rs->fetch_assoc());

			echo '</pre>';

			echo $rs->fetch_assoc()['Name'];*/

			while($fila = $rs->fetch_assoc()) { #Devuelve null si no hay más filas

				echo 'ID: ' . $fila['ID'] . '<br>';
				echo 'Name: ' . $fila['Name'] . '<br><br>';
			}


		} else {

			echo 'No hay datos...';
		}

	}