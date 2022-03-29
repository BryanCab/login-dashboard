<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8a7e44f3fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registro</title>
</head>
<body>

    <div class="contenedor">
        <h1>Regístrate</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">

            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">   
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">   
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Confirmar contraseña">   
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <?php if(!empty($errores)):  ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif;  ?>

        </form>

        <p class="texto-registrate">
            ¿ Ya tienes cuenta ?
            <a href="login.php"><small>Iniciar sesión</small></a>
        </p>

    </div>



</body>
</html>