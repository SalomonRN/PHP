<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Datos</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .container-table {

            background-color: #333;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            color: #fff;
        }

        .section {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .btn_form {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        /* Estilo al pasar el mouse por encima */
        .btn_form:hover {
            background-color: #555;
            /* Color de fondo más oscuro al pasar el mouse */
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
    <div class="container-querry">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" id="miCampoTexto" name="texto">
            <select id="miSelect" name="opcion" class="section">
                <option value="NAME">Nombre</option>
                <option value="LASTNAME">Apellido</option>
                <option value="AGE">Edad</option>
                <option value="JOURNEY">Jornada</option>
                <option value="SEMESTER">Semestre</option>
            </select>
            <button type="submit" name="btn_querry" class="btn_form">Consultar</button>
        </form>

    </div>
    <div class='container-table' id='container-table'>
        <?php
        include('../controlador/conect.php');

        $sqlquerry = "SELECT * FROM `datos`";

        $res = $conectar->query($sqlquerry) or die(mysqli_error($conectar));
        pintar($res);

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_querry'])) {
            check($conectar);
            $valor;

        }
        function check($res)
        {
            include '../controlador/conect.php';


            $valor = $_POST['texto'];
            $filter = $_POST['opcion'];



            switch ($filter) {
                case 'NAME':
                    $request = "SELECT * FROM `datos` WHERE Nombre = '$valor'";
                    break;
                case 'LASTNAME':
                    $request = "SELECT * FROM `datos` WHERE Apellido = '$valor' ";
                    break;
                case 'AGE':
                    $request = "SELECT * FROM `datos` WHERE Edad = '$valor' ";
                    break;
                case 'JOURNEY':
                    $request = "SELECT * FROM `datos` WHERE Jornada = '$valor' ";
                    break;
                case 'SEMESTER':
                    $request = "SELECT * FROM `datos` WHERE Semestre = '$valor' ";
                    break;

                default:
                    echo "OPCION INVALIDA";
                    break;
            }
            $res = mysqli_query($conectar, $request);
            echo (
                "<script> 
                    eliminarDiv();
                    function eliminarDiv() { 
                        var divAEliminar = document.getElementById('container-table'); 
                        divAEliminar.innerHTML = '';
                        return;
                    }
            </script>"
            );

            pintar($res);

        }
        function pintar($res)
        {
            echo ("    
                <div class='container-table' id='container-table'>
                <h1>Registros</h1>
                <table>
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>CC</th>
                        <th>Edad</th>
                        <th>Usuario</th>
                        <th>Password</th>
                        <th>Correo</th>
                        <th>Cancion Favorita</th>
                        <th>Libro Favorito</th>
                        <th>Lugar Favorito</th>
                        <th>Carrera</th>
                        <th>Semestre</th>
                        <th>Colegio Egresado</th>
                        <th>Color Favorito</th>
                        <th>Marca del celular</th>
                        <th>Cantidad de hermanos</th>
                        <th>Jornada</th>
                        <th>Codigo Estdiantil</th>
                    </thead>");
            while ($list = $res->fetch_assoc()) {

                echo "<tr>";
                echo "<td>";
                echo $list['Nombre'];
                echo "</td>";
                echo "<td>";
                echo $list['Apellido'];
                echo "</td>";
                echo "<td>";
                echo $list['Telefono'];
                echo "</td>";
                echo "<td>";
                echo $list['Direccion'];
                echo "</td>";
                echo "<td>";
                echo $list['CC'];
                echo "</td>";
                echo "<td>";
                echo $list['Edad'];
                echo "</td>";
                echo "<td>";
                echo $list['Usuario'];
                echo "</td>";
                echo "<td>";
                echo $list['Correo'];
                echo "</td>";
                echo "<td>";
                echo $list['Password'];
                echo "</td>";
                echo "<td>";
                echo $list['Cancion Favorita'];
                echo "</td>";
                echo "<td>";
                echo $list['Libro Favorito'];
                echo "</td>";
                echo "<td>";
                echo $list['Lugar Favorito'];
                echo "</td>";
                echo "<td>";
                echo $list['Carrera'];
                echo "</td>";
                echo "<td>";
                echo $list['Semestre'];
                echo "</td>";
                echo "<td>";
                echo $list['Colegio Egresado'];
                echo "</td>";
                echo "<td>";
                echo $list['Color Favorito'];
                echo "</td>";
                echo "<td>";
                echo $list['Marca del celular'];
                echo "</td>";
                echo "<td>";
                echo $list['Cantidad de hermanos'];
                echo "</td>";
                echo "<td>";
                echo $list['Jornada'];
                echo "</td>";
                echo "<td>";
                echo $list['Codigo Estudiantil'];
                echo "</td>";
                echo "<td>";
                echo "</tr>";
            }
            echo ("</table>");
            echo ("</div>");
        }

        ?>

</body>

</html>