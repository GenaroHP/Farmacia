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
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>SISTEMA | FARMACIA</title>
</head>
<body>
        <header>
            <div class="contenedor">
                <div id="marca">
                <h1> <span class="resaltado">FARMACIA</span>JHONCITO</h1> 
                </div>
                <nav>
				<ul>
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="lista_productos.php">Lista de Productos</a></li>
                        <li><a href="perfil_producto.php">Productos</a></li>
                        <li><a href="#">Inventario</a></li>
                        <li><a href="#">Medicamentos Vendidos</a></li>
                        <li><a href="login.php">Salir</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <form action="#" class="registro" id="registro" name="registro" method="POST">
		<div class="contenedor">
        <article id="main-col">
        <h1>Perfil Producto</h1>
        <form action="#">             
		<label for="producto">Producto</label>
        <input type="text"  name="producto" placeholder="Producto">
		<br>
		<label for="tipo">Tipo</label>
		<input type="text" name="tipo" placeholder="Tipo">
		<br>
		<label for="fabricado">Fabricado</label>
        <input type="date" name="fabricado" required="">
		<br>
		<label for="comprado">Comprado</label>
		<input type="date" name="comprado" required="">
		<br>
		<label for="precio">Precio</label>
        <input type="number"min="0.1" step="1" name="precio" placeholder="Precio">
		<br>
		<label for="cantidad">Cantidad</label>
        <input type="number" min="1" name="cantidad" placeholder="Ingresa la cantidad">
        <br>
        <label for="vence">Vence</label>
        <input type="date"name="vence" required="">
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
		$producto =$_POST["producto"];
		$tipo =$_POST["tipo"];
		$fabricado=$_POST["fabricado"];
		$comprado=$_POST["comprado"];
		$precio= $_POST["precio"];
        $cantidad=$_POST["cantidad"];
        $vence=$_POST["vence"];

		$insertarDatos = "INSERT INTO perf_producto VALUES('$producto',
		                                           '$tipo',
													'$fabricado',
													'$comprado',
													'$precio',
													'$cantidad',
                                                    '$vence')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>
</body>
</html>