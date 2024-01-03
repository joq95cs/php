<?php 

	$semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes');

	$semana[4] = "Friday";

	echo $semana[4];

	//Funciona como cualquier arreglo, pero de tipado dinámico

	$arreglo = [1, 2, 3];

	echo $arreglo[1];

	$nombre = 'Joqsan';

	$arre = array(array(1, 3), array('Princesa', 'Delia', 56.8));

	$otro = array(0, 5.69, false, $nombre, $semana, $arreglo, array('Cadena', 35.78, 78), $arre);

	echo ' ' . $otro[7][1][1];

	//Similar a los apuntadores de Java...


 ?>