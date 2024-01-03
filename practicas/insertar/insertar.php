<?php 

$nombre = $_GET['nombre'];
$codigo_pais = $_GET['codigo_pais'];
$distrito = $_GET['distrito'];
$poblacion = $_GET['poblacion'];

try {

	$conexion = new PDO('mysql:host=127.0.0.1;dbname=world', 'root', '');

	$statement = $conexion->prepare("INSERT INTO city VALUES(null, :nombre, :codigo_pais, :distrito, :poblacion)");

	$statement->execute(array(':nombre' => $nombre, ':codigo_pais' => $codigo_pais, ':distrito' => $distrito, ':poblacion' => $poblacion));

	//$resultados = $statement->fetchAll();

	//echo $resultados[15]['Name'];

	echo 'Registro insertado correctamente';

} catch(PDOException $e) {

	echo 'Error: ' . $e->getMessage();
}