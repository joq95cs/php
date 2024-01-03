<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginación</title>
    <link rel="stylesheet" href="estilos.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>

    <div class="contenedor">

        <h1>Artículos</h1>
        <section class="articulos">

            <ul>

                <?php foreach($articulos as $articulo): ?>

                    <li><?php echo $articulo['id'] . ": " . $articulo['articulo'] ?></li>

                <?php endforeach; ?>

            </ul>
        </section>

        <section class="paginacion">
            <ul>

            <!--Establecemos cuando el botón de anterior estará deshabilitado-->
                
                <?php if($pagina == 1): ?>

                    <li class="disabled">&laquo;</li>

                <?php else: ?>

                    <li><a href="?pagina=<?php echo ($pagina-1);?>">&laquo;</a></li>

                <?php endif; ?>

                <!--Ejecutamos un ciclo para mostrar las páginas-->

                <?php

                    for($i=1; $i<=$paginas; $i++) {

                        if($pagina == $i) {

                            echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                        } else {

                            echo "<li><a href='?pagina=$i'>$i</a></li>";
                        }
                    }

                ?>

                <!--Establecemos cuando el botón de siguiente estará deshabilitado-->

                <?php if($pagina == $paginas): ?>

                <li class="disabled">&raquo;</li>

                <?php else: ?>

                <li><a href="?pagina=<?php echo ($pagina+1);?>">&raquo;</a></li>

                <?php endif; ?>
                
            </ul>
        </section>
    </div>

</body>
</html>