<?php
include_once 'conect.php';

$name = $_REQUEST['name'];
$lastname = $_REQUEST['lastname'];
$phone = (int) $_REQUEST['phone'];
$addres = $_REQUEST['addres'];
$cc = (int) $_REQUEST['cc'];
$age = (int) $_REQUEST['age'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$user = $_REQUEST['user'];
$song = $_REQUEST['song'];
$book = $_REQUEST['book'];
$place = $_REQUEST['place'];
$carrer = $_REQUEST['carrer'];
$semester = (int) $_REQUEST['semester'];
$cole = $_REQUEST['cole'];
$color = $_REQUEST['color'];
$brand = $_REQUEST['brand'];
$siblings = (int) $_REQUEST['siblings'];
$journey = $_REQUEST['journey'];
$code = (int) $_REQUEST['code'];
$password2 = $_REQUEST['password2'];

$querry = "INSERT INTO `datos` VALUES ('$name','$lastname',$phone,'$addres',$cc, $age,'$user','$email',
'$password','$song','$book','$place','$carrer','$semester','$cole','$color','$brand','$siblings','$journey','$code')";


$querryValiEmail = "SELECT * FROM `datos` WHERE Correo = '$email' ";
$querryValiPhone = "SELECT * FROM  `datos` WHERE Telefono = '$phone' ";
$querryValiUser = "SELECT * FROM  `datos` WHERE Usuario = '$user' ";


$resValiEmail = mysqli_query($conectar, $querryValiEmail);
$resValiPhone = mysqli_query($conectar, $querryValiPhone);
$resValiUser = mysqli_query($conectar, $querryValiUser);


$nEmail = mysqli_num_rows($resValiEmail);
$nPhone = mysqli_num_rows($resValiPhone);
$nUser = mysqli_num_rows($resValiUser);

if ($nPhone >= 1) {
    echo "<script>alert('CELULAR YA REGISTRADO' );</script>";
    echo '<script>window.location.href = "../vista/register.php"</script>';
    
}
if ($nEmail >= 1) {
    echo "<script>alert('EMAIL YA REGISTRADO' );</script>";
    echo '<script>window.location.href = "../vista/register.php"</script>';
    
}

if ($nUser >= 1) {
    echo "<script>alert('USUARIO YA REGISTRADO' );</script>";
    echo '<script>window.location.href = "../vista/register.php"</script>';
    
}

if ($password == $password2 && $nUser == 0) {
    $res = mysqli_query($conectar, $querry);
    if ($res) {
        echo "<script>alert('REALIZADA' );</script>";
        echo '<script>window.location.href = "../vista/index.php"</script>';
    } else {
        echo "<script>alert('ERROR');</script>";
        echo '<script>window.location.href = "../vista/register.php"</script>';
    }
} else {
    echo "<script>alert('REVISE SU CONTRASEÑA Y SU USUARIO' );</script>";
    echo '<script>window.location.href = "../vista/register.php"</script>';
    
}

?>