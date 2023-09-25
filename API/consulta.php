<?php
include('connect.php');
$valor = $_GET["valor"];
if ($res = obtenerResultado("SELECT * FROM `datos` where `valor` = '$valor' ")) {
    while ($filas = $res->fetch_array(MYSQLI_NUM)) {
        echo json_encode($filas);

    }

}
/**
 * <?php
 *include('connect.php');
 *$valor = $_GET["valor"];
 *if ($res=obtenerResultado("SELECT * FROM `datos` where `valor` = '$valor' ")) {
 *    while($filas = $res->fetch_assoc()){*
 *echo json_encode($filas);*
 *
 *   }
 *
 *}*
 *?>
 */
?>