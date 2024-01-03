<?php 

	/*$amigo = array('tel' => 452169, 'edad' => 25);

	extract($amigo);

	echo $edad;*/

	$dias = array('lunes', 'martes', 'miercoles');

	#array_pop($dias); //sacar el último elemento del array

	#echo $dias[0];

	//echo $dias[count($dias)-1];

	//echo join('<br>', $dias);

	//sort($dias);

	//rsort($dias);

	$reverse = array_reverse($dias); //Se tiene que guardar, no modifica el array

	echo join(' - ', $reverse);

 ?>