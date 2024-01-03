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

$sql = "SELECT * FROM usuarios WHERE usuario = SHA2(?, 256) AND password = SHA2(?, 256)";
$ps = $mysqli->prepare($sql);
$ps->bind_param("ss", $username, $password);
$ps->execute();
$result = $ps->get_result();

if($result->num_rows == 1) {

    #$row = $result->fetch_assoc();
    #echo var_dump($row);

    echo "Usuario y password correctos";
}
