<?php

	//$nombre = isset($_GET['nombre']) ? $_GET['nombre']: "Anónimo"; //Como el de Java

	$nombre = $_GET['nombre'] ?? 'Anónimo'; //Solo lleva el else

	echo $nombre;

 ?>