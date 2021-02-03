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

  <link href="assets/css/acceso.css" rel="stylesheet">
  

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

  <div class="container">
		<div id="tabla"></div>
	</div>

  <section id="container" class="container">
		<table class="table table-hover table-condensed table-bordered">
			<tr>
      <td style="color:rgb(166, 41, 216);" ><strong>NOMBRE DE USUARIO</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>CORREO ELECTRONICO</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>CLAVE</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>CARGO</strong></td>
            <td style="color:rgb(166, 41, 216);"><strong>EDITAR</strong></td>
            <td style="color:rgb(166, 41, 216);"><strong>ELIMINAR</strong></td>
			</tr>

			<?php 
	if(isset($_SESSION['consulta'])){
    if($_SESSION['consulta'] > 0){
      $id=$_SESSION['consulta'];
      $id="SELECT id,nombre,email,clave,cargo
      from usuarios where id='$id'";
					}else{
						$sql="SELECT id,nombre,email,clave,cargo
						from usuarios";
					}
				}else{
					$sql="SELECT id,nombre,email,clave,cargo
						from usuarios";
				}

				$result=mysqli_query($enlace,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						     $ver[1]."||".
						     $ver[2]."||".
                             $ver[3]."||".
                             $ver[4];
                              
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
        

				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
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