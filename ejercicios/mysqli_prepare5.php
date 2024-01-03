<?php

$server = '127.0.0.1';
$user = 'root';
$pass = '';
$db_name = 'flutter_userdata';

$mysqli = new mysqli($server, $user, $pass, $db_name);

if($mysqli->connect_errno) {

    die('Fallo de conexión');
}

$id = $_GET['id'];

$sql = 'DELETE FROM login WHERE id = ?';
$statement = $mysqli->prepare($sql);
$statement->bind_param('i', $id);
$statement->execute();

if($mysqli->affected_rows >= 1) {

    echo 'Registro(s) eliminado(s) exitosamente';
}