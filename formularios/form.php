<?php 

	#Lo ideal es validar también con Javascript

	$error = '';

	if(isset($_POST['submit'])) {

		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];

		if(!empty($nombre)) {

			/*$nombre = trim($nombre); #Quita espaciados al inicio y final
			$nombre = htmlspecialchars($nombre); #Transforma a caracteres html
			$nombre = stripcslashes($nombre); #Quita slashes

			*/

			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING); #Remueve los signos que no deben ir
			echo 'Tu nombre es: ' . $nombre . '<br>';

		} else {

			$error .= 'Por favor, ingresa un nombre...<br>';

		}

		if(!empty($correo)) {

			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {

				$error .= 'Por favor, ingresa un correo válido<br>';

			}

			echo 'Tu correo es: ' . $correo;

		} else {

			$error .= 'Por favor, ingresa un correo...';

		}

		

	}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>

		.error {

			color: red;

		}

	</style>

</head>
<body>

	<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		
		<input type="text" name="nombre" placeholder="nombre">
		<input type="text" name="correo" placeholder="correo">

		<?php if(!empty($error)): ?> 

			<!--Código del condicional, pero en html-->

			<div class="error">
				
				<?php echo $error;?>

			</div>


		<?php endif; ?>

		<input type="submit" name="submit">

	</form>
	
</body>
</html>