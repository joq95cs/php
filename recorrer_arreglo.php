<?php 

	$meses = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio');

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

 			foreach($meses as $mes) { //Igual que el for each de Java

 				echo '<li>'. $mes . '</li>';

 			}


 		 ?>

 	</ul>
 	
 </body>
 </html>