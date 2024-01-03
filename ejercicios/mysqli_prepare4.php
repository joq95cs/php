<?php

$server = '127.0.0.1';
$user = 'root';
$pass = '';
$db_name = 'flutter_userdata';

$mysqli = new mysqli($server, $user, $pass, $db_name);

if($mysqli->connect_errno) {

    die('Fallo de conexión');
}

$username = $_GET['username'];
$password = $_GET['password'];
$id = $_GET['id'];

$sql = 'UPDATE login SET username = ?, password = ? WHERE id = ?';
$statement = $mysqli->prepare($sql);
$statement->bind_param('ssi', $username, $password, $id);
$statement->execute();

if($mysqli->affected_rows >= 1) {

    echo 'Registros actualizados exitosamente';
}