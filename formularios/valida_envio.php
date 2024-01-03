<?php 

	/*if($_SERVER['REQUEST_METHOD'] == 'GET') { #No comprueba por que formulario se envio, simplemente comprueba que haya datos enviado por GET o POST

		echo 'Se envia por GET';

	} else {

		echo 'Se envia por POST';

	}*/

	/*if (isset($_POST['enviar'])) { #está seteada
		# code...

		echo 'Datos enviados...';

		echo '<br>Valor de input submit: ';

		print_r($_POST['enviar']);

	}*/

	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {

		echo 'Se han enviado métodos';

	}

	if(isset($_POST['enviar1'])) {

		echo '<br>Datos de formulario 1 enviados...';

	}

	if(isset($_POST['enviar2'])) {

		echo '<br>Datos de formulario 2 enviados...';

	}

 ?>