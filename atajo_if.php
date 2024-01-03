<?php 

	/*$var = 13;

	$edad = ($var === 13) ? 13: 0;

	//echo $edad;

	$bool = isset($edad);

	echo $bool;*/

	$edad = 25;

	$edad = (isset($edad)) ? $edad : 'El usuario no estableció su edad';

	echo $edad;

 ?>