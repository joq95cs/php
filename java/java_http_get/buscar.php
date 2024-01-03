<?php 

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$id = $_GET["id"];

if(empty($id)) {

    die(json_encode(['error'=>'Error de ID', 'estatus'=>'Incorrecto']));
}

$mysqli = new mysqli('localhost', 'root', '', 'java_http');

if($mysqli->connect_errno) {

    die(json_encode(['error'=>'Error de BD', 'estatus'=>'Incorrecto']));
}

$sql ='SELECT * FROM sims WHERE id_sim = ?';
$ps = $mysqli->prepare($sql);
$ps->bind_param('i', $id);
$ps->execute();
$rs = $ps->get_result();

if($rs->num_rows == 1) {

    $registro = $rs->fetch_assoc();
    echo json_encode($registro);

} else {

    die(json_encode(['error'=>'Error de BD', 'estatus'=>'Incorrecto']));
}

echo json_encode(['estatus'=>'Correcto']);