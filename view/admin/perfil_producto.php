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
  <script src="js/funcion3.js"></script>
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
                <h4 style="color:rgb(166, 41, 216);"><strong>PERFIL DE PRODUCTOS</strong></h4>
                <br>
                <p>Registro de la Fecha de Fabricación, compra y su vencimiento de los productos ingresantes a la Farmacia.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mt-5 mt-lg-0">

              <div class="row">
                <div class="col-md-6 form-group">
                <label for="producto" style="color:rgb(166, 41, 216);"><strong>PRODUCTOS</strong></label>
                  <input type="text"  name="producto" id="producto" class="form-control" placeholder="Productos"/>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="tipo" style="color:rgb(166, 41, 216);"><strong>TIPO DE PRODUCTO</strong></label>
                  <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo"/>
                </div>
              </div>
              <div class="form-group mt-3">
              <label for="fabricado" style="color:rgb(166, 41, 216);"><strong>FECHA DE FABRICACIÓN</strong></label>
                <input type="date" class="form-control" id="fabricado" name="fabricado" required="" />
              </div>
              <div class="form-group mt-3">
              <label for="comprado" style="color:rgb(166, 41, 216);"><strong>FECHA DE COMPRA</strong></label>
                <input type="date" class="form-control"  id="comprado" name="comprado" required=""></textarea>
              </div>
              <div class="form-group mt-3">
              <label for="precio" style="color:rgb(166, 41, 216);"><strong>PRECIO DEL PRODUCTO</strong></label>
                <input type="number"min="0.1" step="1"  id="precio" class="form-control"name="precio" placeholder="Precio"></textarea>
              </div>
              <div class="form-group mt-3">
              <label for="cantidad" style="color:rgb(166, 41, 216);"><strong>CANTIDAD DEL PRODUCTO</strong></label>
                <input type="number" min="1" class="form-control" id="cantidad" name="cantidad" placeholder="Ingresa la cantidad"></textarea>
                <div class="form-group mt-3">
                <label for="vence" style="color:rgb(166, 41, 216);"><strong>FECHA DE VENCIMIENTO</strong></label>
                <input type="date" class="form-control" id="vence" name="vence" required=""></textarea>
                <br>
                <br>
                <input type="submit" class="btn btn-secondary" name="registrar" value="Registrar">
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <div class="container">
		<div id="tabla1"></div>
	</div>
  <div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  style="color:rgb(166, 41, 216);"  id="exampleModalLabel"><strong>Actualizar datos</strong></h5>
        </button>
      </div>
      <div class="modal-body">
      <input type="text" hidden="" id="idperfproducto" name="">
        	<label style="color:rgb(166, 41, 216);"><strong>Nombre del Producto</strong></label>
        	<input type="text" name="producto" id="productop" class="form-control input-sm">

        	<label style="color:rgb(166, 41, 216);"><strong>Tipo de Producto</strong></label>
        	<input type="text" name="tipo" id="tipop" class="form-control input-ssm">

        	<label style="color:rgb(166, 41, 216);"><strong>Fecha de Fabricación</strong></label>
        	<input type="date"  name="fabricado" id="fabricadop" class="form-control input-sm">

        	<label style="color:rgb(166, 41, 216);"><strong>Fecha de Compra</strong></label>
        	<input type="date" name="comprado" id="compradop" class="form-control input-sm">

          <label style="color:rgb(166, 41, 216);"><strong>Precio de Producto</strong></label>
        	<input type="number" min="0.1" step="1" name="precio" id="preciop" class="form-control input-sm">

          <label style="color:rgb(166, 41, 216);"><strong>Cantidad del  Producto</strong></label>
        	<input type="number"  name="cantidad" id="cantidadp" class="form-control input-sm">

          <label style="color:rgb(166, 41, 216);"><strong>Fecha de Vencimiento</strong></label>
        	<input type="date"  name="vence" id="vencep" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><strong>Cerrar</strong></button>
        <button type="button"  id=actualizardatos data-dismiss="modal" class="btn btn-secondary"><strong>Actualizar</strong></button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla1').load('componentes/tabla1.php');
	});
</script>

<script type="text/javascript">
        $('#actualizardatos"').click(function(){
          actualizarPerfiProducto();
        });

    });
</script>
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




