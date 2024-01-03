<?php

$db_server = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_name = 'prueba_md5';

$mysqli = new mysqli($db_server, $db_username, $db_password, $db_name);

if($mysqli->errno) {

    die('Error');
}

$username = 'Joqsan';
$password = 'joqlers_95_cs@hotmail.com';


/*$sql = 'INSERT INTO usuarios VALUES (null, ?, MD5(?))';
$ps = $mysqli->prepare($sql);
$ps->bind_param('ss', $username, $password);
$ps->execute();

if($mysqli->affected_rows == 1) {

    echo 'Correcto';
}*/

$sql = 'SELECT * FROM usuarios WHERE password = MD5(?)';
$ps = $mysqli->prepare($sql);
$ps->bind_param('s', $password);
$ps->execute();
$result = $ps->get_result();

if($result->num_rows == 1) {

    $row = $result->fetch_assoc();
    echo var_dump($row);
}
