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

            <h1 class="titulo">Mi Galería</h1>
        </div>
    </header>

    <section class="fotos">

        <div class="contenedor">

            <?php foreach($fotos as $foto): ?>

                <div class="thumb">

                    <a href="foto.php?id=<?php echo $foto['id']; ?>">

                        <img src="fotos/<?php echo $foto['imagen']; ?>" alt="fotos/<?php echo $foto['titulo']; ?>">
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="paginacion">

                <?php if($pagina_actual > 1): ?>

                    <a href="index.php?p=<?php echo $pagina_actual-1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página anterior</a>
                <?php endif; ?>

                <?php if($total_paginas != $pagina_actual): ?>

                    <a href="index.php?p=<?php echo $pagina_actual+1; ?>" class="derecha">Página siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php endif; ?>

                <!--<a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página anterior</a>
                <a href="#" class="derecha">Página siguiente <i class="fa fa-long-arrow-right"></i></a>-->
            </div>
        </div>
    </section>

    <footer>
    
        <p class="copyright">Galería creada por Joqsan Adalid Castellanos Alicea</p>
    </footer>
</body>
</html>