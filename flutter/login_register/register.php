<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'flutter_userdata';

$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);

if($mysqli->connect_errno) {

    die('Error del servidor');
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = 'SELECT * FROM login WHERE username = ? AND password = ?';
$statement = $mysqli->prepare($sql);
$statement->bind_param('ss', $username, $password);
$statement->execute();
$statement->get_result();

if($mysqli->affected_rows == 1) {

    echo json_encode('error');

} else {

    $sql = 'INSERT INTO login VALUES (null, ?, ?)';
    $statement = $mysqli->prepare($sql);
    $statement->bind_param('ss', $username, $password);
    $statement->execute();

    if($mysqli->affected_rows == 1) {

        echo json_encode('correcto');
    }
}