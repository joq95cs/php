<?php

$conexion = mysqli_connect('127.0.0.1', 'root', '', 'flutter_userdata');

if(mysqli_connect_errno()) {

    die('Fallo de conexión');
}

echo 'Conexión exitosa';