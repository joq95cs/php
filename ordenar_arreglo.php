<?php 

	$meses = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio');

	//sort($meses);

	$mixto = array(1, 57, -6.56, -2, 'java', 'dalia', 'anna');

	$otro = array('H' => 500, 'W' => 23, 'A' => 0.56, 'N' => 'Nubia', 'X' => -23.5, 'J' => -12.96);

	//rsort($meses);

	//rsort($mixto);

	sort($otro);

 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>

 	<h1>Meses del año</h1>

 	<ul>

 		<?php

 			foreach($otro as $o) { //Igual que el for each de Java

 				echo '<li>'. $o . '</li>';

 			}


 		 ?>

 	</ul>
 	
 </body>
 </html>