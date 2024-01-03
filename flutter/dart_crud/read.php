<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

//$id_sim = 2;

$id_sim = $_POST['id_sim'];

if(!$id_sim) {
    
    die(json_encode('error'));
}

$db_server = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_name = 'dart_crud';

$mysqli = new mysqli($db_server, $db_username, $db_password, $db_name);

if($mysqli->connect_errno) {

    die(json_encode('error'));
}

$sql = 'SELECT * FROM sims WHERE id_sim = ?';
$statement = $mysqli->prepare($sql);
$statement->bind_param('i', $id_sim);
$statement->execute();
$result = $statement->get_result(); //Obtiene todos los registros

if($result->num_rows == 1) {

    $row = $result->fetch_assoc(); //Obtiene solo un registro en arreglo asociativo
    echo json_encode($row);
}