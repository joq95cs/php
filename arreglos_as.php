<?php

	$arre= array('nombre' => 'Joqsan Castellanos', 'tel' => '452-169-6811', 'edad' => 25, 'pais' => 'México', 'Valor normal', 'interno' => array(0.23, 17, 56, 'valor' => 1995));

	//$arre['interno']['valor'] = 2005;

	//echo $arre['interno'][2];

	$arre['interno']['valor'] = array(0.56, "Lola");

	echo $arre['interno']['valor'][1];

 ?>