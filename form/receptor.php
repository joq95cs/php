<?php

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$edad = $_POST['edad'];
	$sexo = $_POST['sexo'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];

	echo 'Nombre: ' . $nombre;
	echo '<br>Apellidos: ' . $apellidos;
	echo '<br>Edad: ' . $edad;
	echo '<br>Sexo: ' . $sexo;
	echo '<br>Telefono: ' . $telefono;
	echo '<br>Email: ' . $email;

 ?>