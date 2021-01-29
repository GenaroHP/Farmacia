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
  <meta charset="utf-8">

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

  <link href="assets/css/inventario.css" rel="stylesheet">
  

</head>

<body>
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">zjhony854@gmail.com</a>
        <i class="icofont-phone"></i> <a href="#">+ 51 973169585</a>
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      
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

  <div class="container">
		<div id="tabla"></div>
	</div>

  <section id="container" class="container">
		<table class="table table-hover table-condensed table-bordered">
			<tr>
            <td style="color:rgb(166, 41, 216);" ><strong>PRODUCTOS</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>TIPO DE PRODUCTO</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>PRECIO DEL PRODUCTO</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>CANTIDAD DEL PRODUCTO</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>FECHA DE VENCIMIENTO</strong></td>
			</tr>

			<?php 
		$sql="SELECT * from perf_producto";
		$result=mysqli_query($enlace,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['producto'] ?></td>
			<td><?php echo $mostrar['tipo'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
			<td><?php echo $mostrar['cantidad'] ?></td>
			<td><?php echo $mostrar['vence'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
	</div>
</div>
</body>
</html>




