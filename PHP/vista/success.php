<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Bienvenida</title>
<link rel="stylesheet" href="../style.css">
    <style>
        body {
            background-color: #111;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 100px auto;
            max-width: 400px;
            background-color: #333;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            color: #fff;
        }

        p {
            margin-bottom: 20px;
        }

        .logout-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            text-decoration:none;
        }

        .logout-button:hover {
            background-color: #0056b3;
        }
    </style>
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
        <h1>Bienvenido</h1>
        <p>¡Has iniciado sesión con éxito!</p>
        <a href="index.php" class="logout-button">Cerrar Sesión</a>
    </div>
</body>
</html>
