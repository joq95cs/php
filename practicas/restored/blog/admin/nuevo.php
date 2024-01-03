<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conexion = conexion($bd_config);

if(!$conexion) {

    header("Location: ../error.php");
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $thumb = $_FILES['thumb']['tmp_name'];

    $archivo_subido = '../' . $blog_config['carpeta_img'] . $_FILES['thumb']['name'];
    move_uploaded_file($thumb, $archivo_subido);

    $sentencia = $conexion->prepare(
        'INSERT INTO articulos (id, titulo, extracto, texto, thumb) VALUES (null, :titulo, :extracto, :texto, :thumb)'
    );
    $sentencia->execute(array(
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $texto,
        ':thumb' => $_FILES['thumb']['name']
    ));

    header('Location: ' . RUTA . '/admin');
}

require '../views/nuevo.view.php';