<?php

$mysqli = new mysqli('localhost', 'root', '', 'flutter_userdata');

if($mysqli->connect_errno) {

    die('Fallo de conexión');
}

$id1 = 1;
$id2 = 100;

$sql = 'SELECT * FROM login WHERE id BETWEEN ? AND ?';

$statement = $mysqli->prepare($sql);

$statement->bind_param('ii', $id1, $id2);

$statement->execute();

$result = $statement->get_result();

while($row = $result->fetch_assoc()) {

    echo $row['id'] . ' ' . $row['username'] . ' ' . $row['password'] . '<br>';
}