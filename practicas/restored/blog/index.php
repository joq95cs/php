<?php

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion) {

    header('Location: error.php');
}

$posts = getPosts($blog_config['ppp'], $conexion);

if(!$posts) {

    header('Location: error.php');
}
require 'views/index.view.php';