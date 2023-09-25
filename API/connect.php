<?php
header('Contect-type:text/html;');
function obtenerResultado($query){
    $mysqli = new mysqli("localhost","root","",'api');
    if($mysqli->connect_error){
        printf("ERROR");
        exit();
        
    }
    if($mysqli->multi_query($query)){
        return $mysqli->store_result();

    }
    $mysqli->close();
}
?>