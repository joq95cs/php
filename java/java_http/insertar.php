<?php 

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require 'sim.php';

$json = json_decode(file_get_contents('php://input'), true);

if(!$json) {

    die(json_encode(['error'=>'Error de JSON', 'estatus'=>'Incorrecto']));
}

$nombre = $json['nombre'];
$edad = $json['edad'];
$ciudad = $json['ciudad'];
$empleo = $json['empleo'];

if(!$nombre or !$edad or !$ciudad or !$empleo) {

    die(json_encode(['error'=>'Error de JSON', 'estatus'=>'Incorrecto']));
}

$sim = new Sim(null, $nombre, $edad, $ciudad, $empleo);

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