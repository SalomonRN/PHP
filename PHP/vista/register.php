<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
    <link rel="stylesheet" href="../style.css">

    <style>
        .container {
            background-color: #222;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            padding: 20px;
            width: 410px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #fff;
        }

        form {
            display: grid;
            gap: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            padding-left: 0px;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }

        input[type="submit"] {
            width: 102%;
            background-color: #444;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
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
        <h1>Datos Personales</h1>
        <form action="../controlador/api.php" method="post">
            <input name="name" type="text" placeholder="Nombre">
            <input name="lastname" type="text" placeholder="Apellido">
            <input name="phone" type="number" placeholder="Telefono">
            <input name="addres" type="text" placeholder="Direccion">
            <input name="cc" type="number" placeholder="CC">
            <input name="age" type="number" placeholder="Edad">
            <input name="user" type="text" placeholder="Usuario">
            <input name="email" type="email" placeholder="Correo">
            <input name="password" type="password" placeholder="Contraseña">
            <input name="password2" type="password" placeholder="Validar Contraseña">
            <input name="song" type="text" placeholder="Cancion Favorita">
            <input name="book" type="text" placeholder="Libro Favorito">
            <input name="place" type="text" placeholder="Lugar Favorito">
            <input name="carrer" type="text" placeholder="Carrera">
            <input name="semester" type="number" placeholder="Semestre">
            <input name="cole" type="text" placeholder="Colegio Egresado">
            <input name="color" type="text" placeholder="Color Favorito">
            <input name="brand" type="text" placeholder="Marca del celular">
            <input name="siblings" type="number" placeholder="Cantidad de hermanos">
            <input name="journey" type="text" placeholder="Jornada">
            <input name="code" type="number" placeholder="Codigo Estudiantil">
            <input type="submit" value="Enviar">
        </form>
        </form>
    </div>
</body>

</html>