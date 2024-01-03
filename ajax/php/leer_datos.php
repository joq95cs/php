<?php error_reporting(0);

header('Content-type: application/json; charset=utf-8');

$cn = new mysqli('localhost', 'root', '', 'practica_ajax');

if($cn->connect_errno) {

    $respuesta = [

        'error' => true
    ];

} else {

    $cn->set_charset('utf8');

    $ps = $cn->prepare('SELECT * from usuarios');
    $ps->execute();
    $res = $ps->get_result();

    //echo '<pre>'; var_dump($resultados->fetch_assoc()); echo '</pre>';

    $respuesta = [];

    while($fila = $res->fetch_assoc()) {

        $usuario = [

            'id' => $fila['id'],
            'nombre' => $fila['nombre'],
            'edad' => $fila['edad'],
            'pais' => $fila['pais'],
            'correo' => $fila['correo']
        ];

        array_push($respuesta, $usuario);
    }
}

//echo '<pre>'; var_dump($respuesta); echo '</pre>';

echo json_encode($respuesta);