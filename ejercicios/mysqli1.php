<?php

$mysqli = new mysqli('localhost', 'root', '', 'flutter_userdata');

if($mysqli->connect_errno) {

    die('Fallo de conexión');
}

echo 'Conexión exitosa';