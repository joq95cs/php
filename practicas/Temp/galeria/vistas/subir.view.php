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

            <h1 class="titulo">Subir foto</h1>
        </div>
    </header>

    <div class="contenedor">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" method="post" enctype="multipart/form-data">

            <label for="foto">Selecciona tu foto</label>
            <input type="file" name="foto" id="foto">

            <label for="titulo">Título de la foto:</label>
            <input type="text" name="titulo" id="titulo">

            <label for="texto">Descripción:</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripción..."></textarea>

            <?php if(isset($error)): ?>

                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>

            <input type="submit" value="Subir foto" class="submit">
        </form>
    </div>
    <footer>
    
        <p class="copyright">Galería creada por Joqsan Adalid Castellanos Alicea</p>
    </footer>
</body>
</html>