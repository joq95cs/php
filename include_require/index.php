<?php 

	function suma($n1, $n2) {

		return $n1+$n2;

	}

	#include 'vistas.php';
	#require 'vistas.php'; #Si no encuentra el archivo, no se ejecuta el resto del código

	include_once 'vista.php';


	echo '<br><br>Bueno... Esto va después del warning, si existe...';

	include_once 'vista.php'; #también existe require_once

 ?>