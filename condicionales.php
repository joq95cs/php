<?php

	$numero = -69.23;

	if($numero > 20) {

		echo 'Es mayor';

	} else if($numero == 20) {

		echo 'Es igual';

	} else {

		echo 'Es menor';

	}

	echo "<br>";

	$nombre = 'Dalia';

	if($nombre == 'Azucena') {

		echo 'Se llama Azu';

	}

	if($nombre != 'Juana') {

		echo 'No se llama Juanita';

	}

	echo "<br>";

	if($nombre != 'Alma' && $nombre != 'Miriam') {

		echo 'Ni Alma, ni Miris';

	}

	echo "<br>";

	if($nombre != 'Alma' && $nombre != 'Miriam' || $nombre == 'Dalia') {

		echo 'O Ni Alma, ni Miris... O sí Dalis...';

	}

 ?>