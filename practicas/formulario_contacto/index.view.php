<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de contacto</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

	<div class="wrap">
		
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

			<input type="text" class="form-control" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre; ?>">

			<input type="text" class="form-control" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo; ?>">

			<textarea name="mensaje" class="form-control" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje; ?></textarea>

			<?php if(!empty($errores)): ?>

				<div class="alert error">
					
					<?php echo $errores; ?>

				</div>

			<?php elseif($enviado): ?>	

				<div class="alert success">

					<p>Enviado correctamente</p>

				</div>

			<?php endif ?>


			<input type="submit" class="boton" name="submit" value="Enviar correo">

		</form>

	</div>
	
</body>
</html>