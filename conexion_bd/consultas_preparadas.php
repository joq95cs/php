<?php 

/*$pais = $_GET['pais'];
$distrito = $_GET['distrito'];*/
$id = $_GET['id'];

try {

	$conexion = new PDO('mysql:host=localhost;dbname=world', 'root', '');

	$statement = $conexion->prepare('SELECT * FROM city WHERE ID = :id OR ID = :default');

	$statement->execute(array(':id' => $id, ':default' => 25));

	//$resultados = $statement->fetch(); //Solo un registro

	$resultados = $statement->fetchAll();

	foreach($resultados as $fila) {

		/*echo '<pre>';
		print_r($fila);
		echo '</pre>';*/

		echo 'Nombre: ' . $fila['Name'] . '<br>';

	}

} catch(PDOException $error) {

	echo 'Error' . $error->getMessage();
}