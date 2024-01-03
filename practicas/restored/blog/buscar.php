<?php

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion) {

    header('Location: error.php');
}

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {

    $busqueda = limpiarDatos($_GET['busqueda']);
    $sentencia = $conexion->prepare(

        'SELECT * FROM articulos WHERE titulo LIKE :busqueda or extracto LIKE :busqueda or texto LIKE :busqueda'
    );
    $sentencia->execute(array(':busqueda' => "%$busqueda%"));
    $resultados = $sentencia->fetchAll();

    if(empty($resultados)) {

        $titulo = 'No se encontraron artículos con el resultado: ' . $busqueda;
    } else {

        $titulo = 'Resultados de la busqueda: ' . $busqueda;
    }
} else {

    header('Location: ' . RUTA . '/index.php');
}

require 'views/buscar.view.php';