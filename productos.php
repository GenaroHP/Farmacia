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
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SISTEMA | FARMACIA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <link href="assets/css/producto.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/regisproduc.css">
  

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
        <li class="active"><a href="inicio.php">Inicio</a></li>
        <li><a href="list_producto.php">Lista de productos</a></li>
          <li><a href="productos.php">Productos</a></li>
          <li><a href="#">Inventario</a>
          <li><a href="contacto.php">Contactos</a></li>
        </ul>
      </nav>
      <a href="productos.php" class="appointment-btn scrollto">Realizar Registro</a>

    </div>
  </header>
  <section id="producto" class="product">
  <div class="section-title">
        <br>
          <h2>Registre Productos</h2>
        </div>
          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="#">
              <div class="row">
                <div class="col-md-6 form-group">
                <label for="código">Código</label>
                  <input type="text" name="código" class="form-control"  placeholder="Código" />
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="nombre">Nombre</label>
                  <input type="txt" class="form-control" name="nombre"  placeholder="Nombre"/>
                </div>
              </div>
              <div class="form-group mt-3">
              <label for="fabricante">Fabricante</label>
                <input type="text" class="form-control" name="fabricante"  placeholder="Fabricante" />
              </div>
              <div class="form-group mt-3">
              <label for="tipo">Tipo</label>
                <input type="text" class="form-control" name="tipo"  placeholder="Tipo"></textarea>
              </div>
              <div class="form-group mt-3">
              <label for="gramos">Gramos</label>
                <input type="text" class="form-control" name="gramos"   placeholder="Gramos"></textarea>
              </div>
              <div class="form-group mt-3">
              <label for="precio">Precio</label>
                <input type="number"min="0.1" step="1" class="form-control" name="precio"   placeholder="Precio"></textarea>
                <br>
                <br>
                <input type="submit" class="btn" name="registrar" value="Registrar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
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
