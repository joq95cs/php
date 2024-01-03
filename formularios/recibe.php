<?php 

	print_r($_GET);

	/*if(!$_POST) {

		header('Location: http://localhost/curso_php/formularios/');

	}

	$nombre = $_POST['nombre'];
	$sexo = $_POST['sexo'];
	$agno = $_POST['agno'];
	$terminos = $_POST['terminos'];

	echo 'Hola ' . $nombre . ', eres ' . $sexo;

	*/

	#$_POST es un array asosciativo, se accede a cada valor con el valor de name

	#$sexo = $_GET['sexo']; #GET permite inyectar código y por eso debe usarse solo con datos que no sean sensibles si se modifican en la URL

	#echo htmlspecialchars($sexo); #Evita que inyecten código

	if(!$_GET) {

		header('Location: http://localhost/curso_php/formularios/');

	}

	if(!$_GET['nombre']) {

		echo "<script>alert('El usuario no ingresó nombre')</script>";

	}

	$nombre = $_GET['nombre'];
	$sexo = $_GET['sexo'];
	$agno = $_GET['agno'];
	$terminos = $_GET['terminos'];

	echo 'Hola ' . $nombre . ', eres ' . $sexo;

 ?>