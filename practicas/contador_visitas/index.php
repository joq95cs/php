<?php

function contar_usuarios() {

    $archivo = 'contador.txt';

    if(file_exists($archivo)) {

       $cuenta = file_get_contents($archivo) + 1;
       file_put_contents($archivo, $cuenta);

       return $cuenta;

    } else {

        file_put_contents($archivo, 1);

        return 1;
    }

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <h1>Contador de visitas</h1>
    <div class="visitantes">

        <p class="numero">

            <?php echo contar_usuarios();?>
        </p>
        <p class="texto">Visitas</p>
    </div>
    
</body>
</html>