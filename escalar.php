<?php

	declare(strict_types=1) #Obliga el código a respetar los tipos exigidos

	function cuadrado(int $num) { #escalar es simplemente especificar el tipo de dato para evitar conflictos

		return $num*$num;

	}

	$num = '25'; #Es valido si la cadena es convertible a numero

	echo 'El cuadrado de ' . $num . ' es: ' . cuadrado($num);

	#int, float, bool, string, array