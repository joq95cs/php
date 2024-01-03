<?php

	$id = $_GET['id'];

	try { #No es obligado como Java, pero se recomienda el try catch

		$conexion = new PDO('mysql:host=127.0.0.1;dbname=world', 'root', '');

		//echo 'Conexión exitosa';

		//$conexion->query("INSERT INTO city VALUES(null, 'Mi Ciudad', 'MEX', 'En algún lugar', 10000)");

		$rs = $conexion->query("SELECT * FROM city WHERE ID = $id"); //No es incorrecto, pero permote inyección de código

		foreach ($rs as $fila) {

			echo $fila[0] . ': ' . $fila['Name'];
			echo '<br>';

		}

	} catch(PDOException $e) {

		echo 'Error: ' . $e->getMessage();
	}

 ?>