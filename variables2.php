<?php 

	$variable = 25;

	//0 se considera variable vacía
	//null se considera variable vacía
	//false se considera variable vacía

	//Cualquier función que regrese 0, null o false se considerará vacía y de valor false en un if

	if($var = $variable) {

		echo 'Variable no vacía' . '<br>';
		echo $var . '<br>';

	} else {

		echo 'Variable vacía';
	}

	while($var = $variable) {

		echo 'While ejecutado' . '<br>';
		echo $var;

		$variable = 0;
	}
 ?>