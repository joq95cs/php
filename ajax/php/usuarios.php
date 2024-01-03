<?php

header('Content-type: application/json; charset=utf-8');

//echo '[{"nombre": "Joqsan"}, {"nombre": "Lola"}]';

$respuesta = [

    [

        'id' => 'p1',
        'nombre' => 'Joqsan',
        'edad' => 25,
        'pais' => 'México',
        'correo' => 'correo@c.com'
    ],

    [

        'id' => 'p2',
        'nombre' => 'Ángel',
        'edad' => 25,
        'pais' => 'México',
        'correo' => 'correo@c.com'
    ]
];

//var_dump($respuesta);

echo json_encode($respuesta);