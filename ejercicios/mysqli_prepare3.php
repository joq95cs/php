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

$sql = 'INSERT INTO login VALUES (null, ?, ?)';
$statement = $mysqli->prepare($sql);
$statement->bind_param('ss', $username, $password);
$statement->execute();

if($mysqli->affected_rows >= 1) {

    echo 'Registros insertados exitosamente';
}