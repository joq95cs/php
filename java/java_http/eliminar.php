<?php 

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$json = json_decode(file_get_contents('php://input'), true);

if(!$json) {

    die(json_encode(['error'=>'Error de JSON', 'estatus'=>'Incorrecto']));
}

$id = $json['id'];

if(!$id) {

    die(json_encode(['error'=>'Error de JSON', 'estatus'=>'Incorrecto']));
}

$mysqli = new mysqli('localhost', 'root', '', 'java_http');

if($mysqli->connect_errno) {

    die(json_encode('Error de base de datos'));
}

$sql ='DELETE FROM sims WHERE id_sim = ?';
$ps = $mysqli->prepare($sql);
$ps->bind_param('i', $id);
$ps->execute();

if(!$mysqli->affected_rows) {

    die(json_encode(['error'=>'Error de BD', 'estatus'=>'Incorrecto']));
}

echo json_encode(['estatus'=>'Correcto']);