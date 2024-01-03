<?php 


	$numero = '25';

	if($numero === 25) {

		echo 'Es idéntico';

	} if($numero == 25) {

		echo 'Es igual, pero no idéntico...';

	}

	// == es igual, sin importar el tipo
	// === es idéntico, incluyendo el tipo

	echo '<br>';

	$var = 'true';

	if($var === true) {

		echo 'Es idéntico';

	} if($var == true ) {

		echo 'Es igual, pero no idéntico...';

	}

	//==Mismo valor, no tipo
	//===Mismo valor y tipo

	//or y and también son válidos

 ?>