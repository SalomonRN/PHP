<?php

EliminarRegistro($_GET['USUARIO']);
function EliminarRegistro($Usuario){
    include "conect.php";
    $querry = "DELETE FROM `datos` WHERE `USUARIO` = '".$Usuario."'";
    $conectar->query($querry) or die("Error al Eliminar". mysqli_error($conectar));

}
?>
<script>
    alert("Registro")
    window.location.href = '../vista/get.php';
</script>