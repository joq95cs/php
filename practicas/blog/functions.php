<?php

function conexion($bd_config) {

    try {
    
        $conexion = new PDO('mysql:host=localhost;dbname=' . $bd_config['base_datos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    } catch(PDOException $e) {

        return false;
    }
}

function limpiarDatos($datos) {

    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function paginaActual() {

    return isset($_GET['p']) ?(int)$_GET['p'] : 1;
}

function getPosts($ppp, $conexion) {

    $inicio = (paginaActual() > 1) ?paginaActual() * $ppp - $ppp :0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $ppp");
    $sentencia->execute();
    return $sentencia->fetchAll();

}

function noPaginas($ppp, $conexion) {

    $total_posts = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_posts->execute();
    $total_posts = $total_posts->fetch()['total'];

    $no_paginas = ceil($total_posts / $ppp);
    return $no_paginas;
}

function idArticulo($id) {

    return (int)limpiarDatos($id);
}

function getPPID($conexion, $id) {

    $resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado ?$resultado :false);
}

function fecha($fecha) {

    $timestamp = strtotime($fecha);
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp) - 1;
    $agno = date('Y', $timestamp);

    $fecha = $dia . ' de ' . $meses[$mes] . ' del ' . $agno;
    return $fecha;
}

function comprobarSesion() {

    if(!isset($_SESSION['admin'])) {

        header('Location: ' . RUTA);
    }
}