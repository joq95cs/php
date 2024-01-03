<?php 

	if($_POST) {

		echo htmlspecialchars($_POST['nombre']);

	}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
</head>
<body>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"> <!--Si action está vacío se manda a la misma página-->
		<!--Forma aconsejable por la W3E-->

		<label for="t_nombre">Nombre </label>
		<input type="text" name="nombre" id="t_nombre"> <!--Aqui no se especifica el value-->
		<br>

		<label for="r_hombre">Hombre</label>
		<input type="radio" name="sexo" value="hombre" id="r_hombre">

		<label for="r_mujer">Mujer</label>
		<input type="radio" name="sexo" value="mujer" id="r_mujer"> <!--Los radios deben tener el mismo name para que solo se seleccione uno-->

		<br>
		<label for="s_agno">Año de nacimiento </label>
		<select name="agno" id="s_agno">

			<option value="1995">1995</option>
			<option value="1996">1996</option>
			<option value="1997">1997</option>
			<option value="1998">1998</option>
			<option value="1999">1999</option>
			<option value="2000">2000</option>

		</select>

		<br>
		<label for="c_terminos">Aceptar términos </label>
		<input type="checkbox" name="terminos" id="c_terminos" value="ok">

		<br>
		<input type="submit" value="Enviar">

	</form>
	
</body>
</html>