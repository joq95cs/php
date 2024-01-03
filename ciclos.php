<?php 

	/*for($i = 0; $i<10; $i++) {

		echo "HOLA <br>";

	}*/

	//while y do while igual que Java...

	$arr = array('UNO' => 1, 'DOS' => 2, 'TRES' => 3);

	foreach ($arr as $a => $v) { //Si el arreglo es asociativo, el for each también debe serlo para mostrar el valor asociado
		# code...

		echo $a; //Primer valor
		echo $v; //Segundo valor

	}

 ?>