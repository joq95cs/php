<?php 

	$nombre = "Joqsan Adalid Castellanos Alicea";
	$numero = 25;

	$decimal = 4.56;
	$bool = false;

	//echo $double;

	//Variables deben empezar con $ y con minusculas, sin caracteres especiales

	echo "Hola, $nombre, ¿cómo estás? "; //Permite referenciar otra variable 
	
	echo 'Hola Joqsan. '; //No permite referenciar otras variables

	echo 'Hola ' . $nombre . ", tienes " . $numero . " años de edad...";

	//Es recomendable usar comillas sencillas y concatenación

	echo ' ' . 'Tipo de variable: ' . gettype($bool);

 ?>