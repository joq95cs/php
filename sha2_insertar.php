<?php

$db_server = "localhost";
$db_name = "prueba_sha2";
$db_user = "root";
$db_pass = "";

$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);

if($mysqli->errno) {

    die('Error');
}

$username = "soanna";
$password = "castellanos01";

$sql = "INSERT INTO usuarios VALUES (null, SHA2(?, 256), SHA2(?, 256))";
$ps = $mysqli->prepare($sql);
$ps->bind_param("ss", $username, $password);
$ps->execute();

if($mysqli->affected_rows == 1) {

    echo 'Correcto';
}
