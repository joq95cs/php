<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$id = $_POST['id'];

$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'flutter_crud';

$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);

if($mysqli->connect_errno) {

    die('Error de conexión');
}

$sql = 'SELECT * FROM peliculas WHERE id = ?';
$statement = $mysqli->prepare($sql);
$statement->bind_param('i', $id);
$statement->execute();
$result = $statement->get_result();

if($mysqli->affected_rows == 1) {

    $row = $result->fetch_assoc();
    echo json_encode($row);

} else {

    echo json_encode('incorrecto');
}