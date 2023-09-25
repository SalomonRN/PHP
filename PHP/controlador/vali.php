<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión - Tema Noche</title>
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
            margin-top: 20%;
            max-width: 400px;
            background-color: #333;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1 {

            color: #fff;
        }
    </style>
</head>

<body>

</body>

</html>


<?php
include_once 'conect.php';

$user = $_REQUEST['user'];
$password = $_REQUEST['password'];


$querryValidator = "SELECT * FROM `datos` WHERE  (Password = '$password') AND (Usuario = '$user' OR Correo = '$user')";

$resValidator = mysqli_query($conectar, $querryValidator);

$Validation = mysqli_num_rows($resValidator);

if ($Validation === 1) {
    header('Location: ../vista/success.php');

} else {
    $querryValidatorPassword = "SELECT * FROM `datos` WHERE  Password != '$password' and Usuario = '$user' or Correo = '$user'";

    $resValidatorPassword = mysqli_query($conectar, $querryValidatorPassword);

    $ValidationPass = mysqli_num_rows($resValidatorPassword);


    if ($ValidationPass == 1) {
        echo ("<script>alert('CONTRASEÑA INCORRECTA')</script>");

    }
    $querryValidatorUser = "SELECT * FROM `datos` WHERE Usuario = '$user' or Correo = '$user'";

    $resValidatorUser = mysqli_query($conectar, $querryValidatorUser);

    $ValidationUser = mysqli_num_rows($resValidatorUser);

    if ($ValidationUser == 0) {
        echo ("<script>alert('USUARIO NO ENCONTRADO')</script>");
    }
    echo '<script>window.location.href = "../vista/index.php"</script>';
}

?>