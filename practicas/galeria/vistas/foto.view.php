<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">

    <script src="https://use.fontawesome.com/8a79f43c31.js"></script>
</head>
<body>

    <header>

        <div class="contenedor">

            <h1 class="titulo">Foto: 
            
            <?php if(!empty($foto['titulo'])) {

                echo $foto['titulo'];

            } else {

                echo $foto['imagen'];

            } ?></h1>
        </div>
    </header>

    <div class="contenedor">

        <div class="foto">

            <img src="fotos/<?php echo $foto['imagen']; ?>">
            <p class="texto"><?php echo $foto['texto']; ?></p>
            <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
        </div>
    </div>
    <footer>
    
        <p class="copyright">Galería creada por Joqsan Adalid Castellanos Alicea</p>
    </footer>
</body>
</html>