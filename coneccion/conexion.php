<?php 
    require_once 'datos.php';
	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}else {
        echo"Conexion Exitosa";
    }
?>