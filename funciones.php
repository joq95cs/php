<?php 

	//Tiene más de 1000 funciones existentes

	//Similar a Javascript

	function saludo() {

		echo 'Hola a todos';

	}

	function hola($nombre) {

		echo "Hola, $nombre, qué pex???";

	}

	function sumar($n1, $n2) { 

		$r = $n1 + $n2;
		return $r;
		
		//return 52 + 0.12;

		//return 'QUIERO';

	}

	$r = sumar(10, 30);

	echo $r;

	$arre = array('Hola', 23.5, array(0, 89.6));

	//saludo();
	//hola('Lola');
	//sumar(12.69, 78);

	//Lo demás es igual a Java

 ?>