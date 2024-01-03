<?php 

	$var = 'Lady Gaga';

	//El switch puede ser de tipado dinámico

	switch($var) {

		case 25:

			echo "Vale 25";

			break;

		case 89.95:

			echo 'Tiene un valor double';

			break;

		case false:

			echo 'Es un boolean false';

		case 'Lady Gaga':

			echo 'Es Lady Gaga';

			break;

		default:

			echo "No vale nada del switch";


	}

 ?>