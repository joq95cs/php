<?php session_start();

//Del admin

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

comprobarSesion();

if(!$conexion) {

    header('Location: ../error.php');
}

$posts = getPosts($blog_config['ppp'], $conexion);

require '../views/admin_index.php';