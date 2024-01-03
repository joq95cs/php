<?php 

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require 'sim.php';

$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
$ciudad = $_GET['ciudad'];
$empleo = $_GET['empleo'];

if(empty($nombre) or empty($edad) or empty($ciudad) or empty($empleo)) {

    die(json_encode(['error'=>'Error de argumentos', 'estatus'=>'Incorrecto']));
}

$sim = new Sim(null, $nombre, (int)$edad, $ciudad, $empleo);

$sim_nombre = $sim->getNombre();
$sim_edad = $sim->getEdad();
$sim_ciudad = $sim->getCiudad();
$sim_empleo = $sim->getEmpleo();

$mysqli = new mysqli('localhost', 'root', '', 'java_http');

if($mysqli->connect_errno) {

    die(json_encode(['error'=>'Error de BD', 'estatus'=>'Incorrecto']));
}

$sql ='INSERT INTO sims VALUES (null, ?, ?, ?, ?)';
$ps = $mysqli->prepare($sql);
$ps->bind_param('siss', $sim_nombre, $sim_edad, $sim_ciudad, $sim_empleo);
$ps->execute();

if(!$mysqli->affected_rows) {

    die(json_encode(['error'=>'Error de BD', 'estatus'=>'Incorrecto']));
}

echo json_encode(['estatus'=>'Correcto']);