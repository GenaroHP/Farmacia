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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/regisproduc.css">
    <title>SISTEMA | FARMACIA</title>
</head>
<body>
		<div class="contenedor">
        <article id="main-col">
        <h1>Productos</h1>
        <form action="#"> 
		<label for="código">Código</label>
        <input type="text"  name="código" placeholder="Código">
		<br>
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" placeholder="Nombre">
		<br>
		<label for="fabricante">Fabricante</label>
        <input type="text" name="fabricante" placeholder="Fabricante">
		<br>
		<label for="tipo">Tipo</label>
		<input type="text" name="tipo" placeholder="Tipo">
		<br>
		<label for="gramos">Gramos</label>
        <input type="text" name="gramos" placeholder="Gramos">
		<br>
		<label for="precio">Precio</label>
        <input type="number"min="0.1" step="1" name="precio" placeholder="Precio">
        <br>
        <br>
		<input type="submit" class="btn" name="registrar" value="Registrar">
	</form>
	</article>
	</div>
</body>
</html>
<?php
	if(isset($_POST['registrar'])){
		$código =$_POST["código"];
		$nombre =$_POST["nombre"];
		$fabricante=$_POST["fabricante"];
		$tipo=$_POST["tipo"];
		$gramos= $_POST["gramos"];
		$precio=$_POST["precio"];

		$insertarDatos = "INSERT INTO productos VALUES('$código',
		                                           '$nombre',
													'$fabricante',
													'$tipo',
													'$gramos',
													'$precio')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>
</body>
</html>

