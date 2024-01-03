<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$nombre = $_POST['post_nombre'];
$apellido_paterno = $_POST['post_apellido_paterno'];
$apellido_materno = $_POST['post_apellido_materno'];
$telefono = $_POST['post_telefono'];
$direccion = $_POST['post_direccion'];
$nip = $_POST['post_nip'];
$saldo = 0;

/*$nombre = 'prueba';
$apellido_paterno = 'prueba';
$apellido_materno = 'prueba';
$telefono = 10;
$direccion = 'prueba';
$nip = 10;
$saldo = 10;
*/

if(!$nombre or !$apellido_paterno or !$apellido_materno or !$telefono or !$direccion or !$nip) {

    echo json_encode(0);
    die();
}

$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'flutter_mini_cajero';

$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);

if($mysqli->connect_errno) {

    die('Error de conexión');
}

$sql = 'INSERT INTO clientes VALUES (null, ?, ?, ?, ?, ?, ?, ?)';
$statement = $mysqli->prepare($sql);
$statement->bind_param('sssssii', $nombre, $apellido_paterno, $apellido_materno, $telefono, $direccion, $nip, $saldo);
$statement->execute();

if($mysqli->affected_rows == 1) {

    echo json_encode(1);

} else {

    echo json_encode(0);
}