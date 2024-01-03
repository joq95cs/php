<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <div class="contenedor">

        <h1 class="titulo">Iniciar sesión</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="formulario" name="login">

            <div class="form-group">

                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
                
            </div>

            <div class="form-group">

                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
                
            </div>

            <?php if(!empty($errores)): ?>

                <div class="error">

                    <ul>

                        <?php echo $errores; ?>
                    
                    </ul>

                </div>
            <?php endif; ?>
        </form>

        <p class="texto-registrate">¿Aun no tienes cuenta?<a href="registrate.php">Regístrate</a></p>
    </div>

</body>
</html>