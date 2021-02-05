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
<?php 
  session_start();

  unset($_SESSION['consulta']);

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
  <script src="js/funcion1.js"></script>
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
  
  <section id="registro" class="registro">
  <form action="#" class="registro" id="registro" name="registro" method="POST">
        <div class="container">
        <div class="row mt-5">
        <div class="col-lg-4">

        <div class="info">
              <div class="address">
                <h4 style="color:rgb(166, 41, 216);"><strong>PRODUCTOS</strong></h4>
                <br>
                <p>Registro de los Productos ingresantes a la Farmacia.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="#">
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="nombre" style="color:rgb(166, 41, 216);"><strong>NOMBRE DEL PRODUCTO</strong></label>
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre"/>
                </div>
              </div>
              <div class="form-group mt-3">
              <label for="fabricante" style="color:rgb(166, 41, 216);"><strong>COMPAÑIA FABRICANTE</strong></label>
                <input type="text" class="form-control" name="fabricante" placeholder="Fabricante"/>
              </div>
              <div class="form-group mt-3">
              <label for="tipo" style="color:rgb(166, 41, 216);"><strong>TIPO DE PRODUCTO</strong></label>
                <input type="text" class="form-control" name="tipo" placeholder="Tipo"></textarea>
              </div>
              <div class="form-group mt-3">
              <label for="gramos" style="color:rgb(166, 41, 216);"><strong>CANTIDAD DE GRAMOS</strong></label>
                <input type="text" class="form-control" name="gramos" placeholder="Gramos"></textarea>
              </div>
              <div class="form-group mt-3">
              <label for="precio" style="color:rgb(166, 41, 216);"><strong>PRECIO DEL PRODUCTO</strong></label>
                <input type="number"min="0.1" step="1" class="form-control"name="precio" placeholder="Precio"></textarea>
                <br>
                <br>
                <input type="submit" class="btn btn-secondary"  name="registrar" value="Registrar">
                             
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <div class="container">
		<div id="tabla"></div>
	</div>

  <div class="modal fade" id="modalLista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:rgb(166, 41, 216);"  id="exampleModalLabel"><strong>Actualizar datos</strong></h5>
        </button>
      </div>
      <div class="modal-body">
      <input type="text" hidden="" id="idproductos" name="">
          
        	<label style="color:rgb(166, 41, 216);"><strong>Nombre del Producto</strong></label>
        	<input type="text" id="nombresp" name="" class="form-control input-sm">

        	<label style="color:rgb(166, 41, 216);"><strong>Compañia Fabricante</strong></label>
        	<input type="text"  id="fabricantep" name="" class="form-control input-ssm">

        	<label style="color:rgb(166, 41, 216);"><strong>Tipo de Producto</strong></label>
        	<input type="text"  id="tipop" name="" class="form-control input-sm">

        	<label style="color:rgb(166, 41, 216);"><strong>Cantidad de Gramos</strong></label>
        	<input type="text"  id="gramosp" name="" class="form-control input-sm">

          <label style="color:rgb(166, 41, 216);"><strong>Precio de Producto</strong></label>
        	<input type="number" min="0.10" step="1"  id="preciop" name="" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button"   class="btn btn-secondary" data-dismiss="modal"><strong>Cerrar</strong></button>
        <button type="button" class="btn btn-secondary" id="actualizadatos" data-dismiss="modal">Actualizar</button>
      </div>
    </div>
  </div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
	});
  </script>

<script type="text/javascript">

        $('#actualizadatos"').click(function(){
          actualizarProducto();
        });

    });
</script>

<?php
	if(isset($_POST['registrar'])){
		$nombre =$_POST["nombre"];
		$fabricante=$_POST["fabricante"];
		$tipo=$_POST["tipo"];
		$gramos= $_POST["gramos"];
		$precio=$_POST["precio"];

		$insertarDatos = "INSERT INTO productos VALUES(' ',
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
<?php 
          
  

