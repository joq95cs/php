<?php 

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$id = $_GET["id"];

if(empty($id)) {

    die(json_encode(['error'=>'Error de ID', 'estatus'=>'Incorrecto']));
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