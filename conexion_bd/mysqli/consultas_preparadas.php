<?php

	$cn = new mysqli('127.0.0.1', 'root', '', 'world');

	if(!$cn->connect_errno) {

		if(isset($_GET["nombre"]) and isset($_GET["codpais"]) and isset($_GET["distrito"]) and isset($_GET["poblacion"])) {

			$nombre = $_GET["nombre"];

			$cod_pais = $_GET["codpais"];

			$distrito = $_GET["distrito"];

			$poblacion = $_GET["poblacion"];
		}

		$statement = $cn->prepare('INSERT INTO city VALUES (null, ?, ?, ?, ?)');

		$statement->bind_param("sssi", $nombre, $cod_pais, $distrito, $poblacion); //Tres strings (s) y un int (i)

		$statement->execute();

		if($cn->affected_rows >= 1) {

			echo "Registros insertados: " . $cn->affected_rows;
		} else {

			echo "Ningún registro insertado";
		}

	} else {

		die('Error del servidor');

	}