<?php 
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="proyecto_farmacia";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <title>SISTEMA | FARMACIA</title>
  </head>
  <body>
  <div class="mobile-screen">
  <div class="header">
    <h1>Recuperar Contraseña</h1>
  </div>
  
  <div class="logo"></div>
  <form id="login-form">
  <input type="text" name="forgotten" placeholder="E-mail o Número Teléfonico">
    <a href="#" class="login-btn" id="getpass-btn">Obtener Contraseña</a>
    <a href="login.php" class="login-btn">Login</a>
</div>
<script type="text/javascript" src="js/login.js"></script>
</body>
</html>