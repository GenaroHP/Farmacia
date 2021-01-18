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
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>SISTEMA | FARMACIA</title>
  </head>
  <body>
  <div class="mobile-screen">
  <div class="header">
    <h1>Registro</h1>
  </div>
  
  <div class="logo"></div>
  
  <form id="login-form">
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="email" name="correo" placeholder="Correo">
    <input type="text" name="teléfono" placeholder="Teléfono">
    <input type="password" name="contraseña" placeholder="Contraseña">
    <input type="submit" class="login-btn" name="registrarse" value="Registrate">
    <a href="login.php" class="login-btn">Login</a>
  </form>
  </form>
    </form>

</body>
</html>
<?php
	if(isset($_POST['registrarse'])){
    $usuario =$_POST["usuario"];
    $nombres =$_POST["nombres"];
    $correo=$_POST["correo"];
    $teléfono=$_POST["teléfono"];
    $contraseña=$_POST["contraseña"];
		
		$id= rand(1,99);

		$insertarDatos = "INSERT INTO usuarios VALUES('$usuario',
													'$nombres',
													'$correo',
                          '$teléfono',
                          '$contraseña')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>
		
				

