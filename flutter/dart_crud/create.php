<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$genero = $_POST['genero'];
$edad = $_POST['edad'];
$residencia = $_POST['residencia'];

if(!$nombre or !$apellido or !$genero or !$edad or !$residencia) {
    
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

$sql = 'INSERT INTO sims VALUES (null, ?, ?, ?, ?, ?)';
$statement = $mysqli->prepare($sql);
$statement->bind_param('sssis', $nombre, $apellido, $genero, $edad, $residencia);
$statement->execute();

if($mysqli->affected_rows) {

    echo json_encode('correcto');

} else {

    echo json_encode('error');
}