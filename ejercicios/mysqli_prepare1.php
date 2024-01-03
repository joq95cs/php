<?php

$mysqli = new mysqli('localhost', 'root', '', 'flutter_userdata');

if($mysqli->connect_errno) {

    die('Fallo de conexión');
}

$id = 23;

$sql = 'SELECT * FROM login WHERE id = ?';

$statement = $mysqli->prepare($sql);

$statement->bind_param('i', $id);

$statement->execute();

$result = $statement->get_result();

$row = $result->fetch_assoc();

echo $row['username'];