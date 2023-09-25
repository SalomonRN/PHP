<?php 
	$NAMEHOSTBD = 'localhost';
	$USERNAMEBD = 'root';
	$PASSWORDBD = '';
	$BDNAME     = 'web';
	$conectar = mysqli_connect($NAMEHOSTBD, $USERNAMEBD, $PASSWORDBD, $BDNAME);
	if ($conectar) {
		echo "<script>console.log('CONEXION REALIZADA' );</script>";
	}else{
		echo "<script>console.log('CONEXION FALLIDA' );</script>";
        
	}
?>