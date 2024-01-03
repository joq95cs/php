<?php

	$cn = new mysqli('127.0.0.1', 'root', '', 'world');

	if(!$cn->connect_errno) {

		$sql = "INSERT INTO city VALUES (null, 'Newcrest', 'MEX', 'Sims 4', 50000)";

		//$sql = "UPDATE city SET District = 'The Sims 4' WHERE District = 'Sims 4'";

		$cn->query($sql);

		//$cn->query("INSERT INTO city VALUES (null, 'Strange Ville', 'JPN', 'Sims 4', 10000)");

		if($cn->affected_rows >= 1) {

			echo 'Registros insertados: ' . $cn->affected_rows;

		}


	} else {

		die('Error del servidor');

	}