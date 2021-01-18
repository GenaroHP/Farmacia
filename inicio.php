<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>SISTEMA | FARMACIA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
    	touch: true,
    	pauseOnAction: false,
    	pauseOnHover: false,
    });
  });
</script>
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
        <section id="cajas">
            <div class="contenedor">
                <div class="caja">
                    <img src="img/cuidado.svg">
                    <h3>Descripción</h3>
                    <h2> <a href="#">CUIDADO</a></h2>

                </div>
                <div class="caja">
                        <img src="img/pastilla.svg">
                        <h3>Descripción</h3>
                        <h2><a href="#">PASTILLAS</a></h2>
                        
                </div>
                <div class="caja">
                            <img src="img/jarabe.svg">
                            <h3>Descripción</h3>
                            <h2><a href="#">JARABES</a></h2>      
                </div>
            </div>
        </section>
</body>
</html>