<?php 

	session_start(); //Done se trabaje con sesiones

	$_SESSION['nombre'] = 'Joqsan Adalid'; //La variable estará disponible en varias páginas

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<h1>Página de inicio</h1>
	<p></p>	

	<a href="pagina_2.php">Ir a la página 2</a>
	
</body>
</html>