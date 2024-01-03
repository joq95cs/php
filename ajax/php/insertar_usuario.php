<?php error_reporting(0);

header('Content-type: application/json; charset=utf-8');

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$pais = $_POST['pais'];
$correo = $_POST['correo'];

function validarDatos($nombre, $edad, $pais, $correo) {

    if($nombre == '') {

        return false;

    } else if($edad == '' || is_int($edad)) {

        return false;

    } else if($pais == '') {

        return false;

    } else if($correo == '') {

        return false;
    }

    return true;
}

if(validarDatos($nombre, $edad, $pais, $correo)) {

    $cn = new mysqli('localhost', 'root', '', 'practica_ajax');
    $cn->set_charset('utf-8');

    if($cn->connect_errno) {

        $respuesta = [

            'error' => true
        ];

    } else {

        $ps = $cn->prepare("INSERT INTO usuarios (nombre, edad, pais, correo) VALUES (?, ?, ?, ?)");
        $ps->bind_param('siss', $nombre, $edad, $pais, $correo);
        $ps->execute();

        if($cn->affected_rows <= 0) {

            $respuesta = [

                'error' => true
            ];
        }

        $respuesta = [];
    }

} else {

    $respuesta = [

        'error' => true
    ];
}

echo json_encode($respuesta);