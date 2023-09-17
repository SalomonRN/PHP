<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <nav class="navbar">
           <img src="../src/img/toyota.jpg" alt="LOGO">
            <ul>
                <li><a href="../vista/index.php">Inicio</a></li>
                <li><a href="../vista/get.php">Get</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form action="../controlador/vali.php" method="post">
            <input name="user" type="text" placeholder="Usuario/Correo" required>
            <input name="password" type="password" placeholder="Contraseña" required>
            <input type="submit" value="Iniciar Sesión">
        </form>

        <a href="register.php" class="register-link">Registrarse</a>
    </div>
</body>

</html>