<?php

try {

    $conexion = new PDO('mysql:host=localhost;dbname=practica_paginacion', 'root', '');

} catch(PDOException $e) {

    echo "Error: " + $e->getMessage();
    die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$ppp = 5;

$inicio = ($pagina > 1) ? ($pagina * $ppp - $ppp) : 0;

$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $ppp");

$articulos->execute();
$articulos = $articulos->fetchAll();

if(!$articulos) { //Si el array es vacío

    header('Location: index.php');
}

$total = $conexion->query('SELECT FOUND_ROWS() as total');
$total = $total->fetch()['total'];

$paginas = ceil($total/$ppp);

//echo $paginas;
require 'index.view.php';