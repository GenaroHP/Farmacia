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
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title>SISTEMA | FARMACIA</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>

  <link href="assets/css/productos.css" rel="stylesheet">
  

</head>

<body>
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">zjhony854@gmail.com</a>
        <i class="icofont-phone"></i> <a href="#">+ 51 973169585</a>
      </div>
    </div>
  </div>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">FARMACIA JHONCITO</a></h1>

      <nav class="nav-menu d-none d-lg-block">
      <ul>
          <li><a href="admin.php">Inicio</a></li>
          <li><a href="acceso.php">Accesos</a></li>
          <li><a href="list_producto.php">Lista de productos</a></li>
          <li><a href="perfil_producto.php">Perfil de Producto</a></li>
          <li><a href="inventario.php">Inventario</a>
        </ul>
      
      </nav>
      <a href="../../controller/cerrarSesion.php" class="appointment-btn scrollto">Cerrar Sesión</a>

    </div>
  </header>
  <section id="producto" class="producto">
  <form action="#" class="registro" id="registro" name="registro" method="POST">
        <div class="container">
        <div class="row mt-5">
        <div class="col-lg-4">

            <div class="info">
              <div class="address">
                <h4>Ubicación:</h4>
                <p>Andahuaylas S/N</p>
              </div>
          
              <div class="Correo">
                <h4>Correo:</h4>
                <p>zjhony854@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="#">
              <div class="row">
                <div class="col-md-6 form-group">
                <label for="producto" style="color:rgb(166, 41, 216);"><strong>PRODUCTOS</strong></label>
                  <input type="text"  name="producto" class="form-control" placeholder="Productos"/>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="tipo" style="color:rgb(166, 41, 216);"><strong>TIPO DE PRODUCTO</strong></label>
                  <input type="text" class="form-control" name="tipo" placeholder="Tipo"/>
                </div>
              </div>
              <div class="form-group mt-3">
              <label for="fabricado" style="color:rgb(166, 41, 216);"><strong>FECHA DE FABRICACIÓN</strong></label>
                <input type="date" class="form-control" name="fabricado" required="" />
              </div>
              <div class="form-group mt-3">
              <label for="comprado" style="color:rgb(166, 41, 216);"><strong>FECHA DE COMPRA</strong></label>
                <input type="date" class="form-control" name="comprado" required=""></textarea>
              </div>
              <div class="form-group mt-3">
              <label for="precio" style="color:rgb(166, 41, 216);"><strong>PRECIO DEL PRODUCTO</strong></label>
                <input type="number"min="0.1" step="1" class="form-control"name="precio" placeholder="Precio"></textarea>
              </div>
              <div class="form-group mt-3">
              <label for="cantidad" style="color:rgb(166, 41, 216);"><strong>CANTIDAD DEL PRODUCTO</strong></label>
                <input type="number" min="1" class="form-control" name="cantidad" placeholder="Ingresa la cantidad"></textarea>
                <div class="form-group mt-3">
                <label for="vence" style="color:rgb(166, 41, 216);"><strong>FECHA DE VENCIMIENTO</strong></label>
                <input type="date" class="form-control" name="vence" required=""></textarea>
                <br>
                <br>
                <input type="submit" class="btn" name="registrar"style="color:rgb(166, 41, 216);" value="Registrar">
                <input type="submit" href="perfil_producto.php" class="btn" style="color:rgb(166, 41, 216);" value="Refrescar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
   <section id="container" class="container">
		<table class="table table-hover table-condensed table-bordered">
		<tr>
      <td style="color:rgb(166, 41, 216);" ><strong>PRODUCTOS</strong></td>
      <td style="color:rgb(166, 41, 216);"><strong>TIPO DE PRODUCTO</strong></td>
      <td style="color:rgb(166, 41, 216);"><strong>FECHA DE FABRICACIÓN</strong></td>
      <td style="color:rgb(166, 41, 216);"><strong>FECHA DE COMPRA</strong></td>
      <td style="color:rgb(166, 41, 216);"><strong>PRECIO DEL PRODUCTO</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>CANTIDAD DEL PRODUCTO</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>FECHA DE VENCIMIENTO</strong></td>
      <td style="color:rgb(166, 41, 216);"><strong>EDITAR</strong></td>
      <td style="color:rgb(166, 41, 216);"><strong>ELIMINAR</strong></td>
			</tr>

			<?php 
	if(isset($_SESSION['consulta'])){
    if($_SESSION['consulta'] > 0){
      $id=$_SESSION['consulta'];
      $id="SELECT id,producto,tipo,fabricado,comprado,precio,cantidad,vence  
      from perf_producto where id='$id'";
					}else{
						$sql="SELECT id,producto,tipo,fabricado,comprado,precio,cantidad,vence 
						from perf_producto";
					}
				}else{
					$sql="SELECT id,producto,tipo,fabricado,comprado,precio,cantidad,vence 
						from perf_producto";
				}

				$result=mysqli_query($enlace,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						     $ver[1]."||".
						     $ver[2]."||".
                 $ver[3]."||".
                 $ver[4]."||".
                 $ver[5]."||".
                 $ver[6]."||".
                 $ver[7];
              
                
			 ?>
			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
        <td><?php echo $ver[5] ?></td>
        <td><?php echo $ver[6] ?></td>
        <td><?php echo $ver[7] ?></td>

				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalPerfil" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
        <div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  style="color:rgb(166, 41, 216);" id="exampleModalLabel"><strong>Actualizar datos</strong></h5>
        </button>
      </div>
      <div class="modal-body">
      <input type="text" hidden="" id="idproducto" name="">
        	<label style="color:rgb(166, 41, 216);"><strong>Nombre del Producto</strong></label>
        	<input type="text" name="producto" id="productop" class="form-control input-sm">
        	<label style="color:rgb(166, 41, 216);"><strong>Tipo de Producto</strong></label>
        	<input type="text" name="tipo" id="tipop" class="form-control input-ssm">
        	<label style="color:rgb(166, 41, 216);"><strong>Fecha de Fabricación</strong></label>
        	<input type="date"  name="fabricado" id="fabricaciónp" class="form-control input-sm">
        	<label style="color:rgb(166, 41, 216);"><strong>Fecha de Compra</strong></label>
        	<input type="date" name="comprado" id="comprap" class="form-control input-sm">
          <label style="color:rgb(166, 41, 216);"><strong>Precio de Producto</strong></label>
        	<input type="number" min="0.1" step="1" name="precio" id="preciop" class="form-control input-sm">
          <label style="color:rgb(166, 41, 216);"><strong>Cantidad del  Producto</strong></label>
        	<input type="number"  name="cantidad" id="cantidadp" class="form-control input-sm">
          <label style="color:rgb(166, 41, 216);"><strong>Fecha de Vencimiento</strong></label>
        	<input type="date"  name="vence" id="vencimientop" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><strong>Cerrar</strong></button>
        <button type="button" id="actualizadatos" data-dismiss="modal" class="btn btn-secondary"><strong>Actualizar</strong></button>
      </div>
    </div>
  </div>
</div>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
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

		$insertarDatos = "INSERT INTO perf_producto VALUES(' ',
		                                           '$producto',
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


