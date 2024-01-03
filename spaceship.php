<?php 

	//5 <=> 2; #izquierda mayor

	//echo 2 <=> 5; #izquierda menor

	//echo 2 <=> 2;

	

	function comparar($a, $b) {

		/*if($a == $b) {

			return 0;

		} else if($a > $b) {

			return 1;

		} else {

			return -1;

		}*/

		return $a <=> $b;

	}

	$arreglo = array(3, 12, -9, 25, 0, 12.96);

	usort($arreglo, 'comparar');

	//sort($arreglo);

	echo implode(', ', $arreglo);
	
 ?>