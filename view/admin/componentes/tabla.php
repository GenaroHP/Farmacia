<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
 <div class="container">
		<div id="tabla"></div>
	</div>
<div class="row">
<div class="col-sm-12">
		<table class="table table-hover table-condensed table-bordered">
			<tr>
			<td style="color:rgb(166, 41, 216);" ><strong>NOMBRE DEL PRODUCTO</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>COMPAÑIA FABRICANTE</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>TIPO DE PRODUCTO</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>CANTIDAD DE GRAMOS</strong></td>
			<td style="color:rgb(166, 41, 216);"><strong>PRECIO DEL PRODUCTO</strong></td>
          <td style="color:rgb(166, 41, 216);"><strong>EDITAR</strong></td>
            <td style="color:rgb(166, 41, 216);"><strong>ELIMINAR</strong></td>>
			</tr>

			<?php 
			if(isset($_SESSION['consulta'])){
    if($_SESSION['consulta'] > 0){
      $id=$_SESSION['consulta'];
      $id="SELECT id,nombres,fabricante,tipo,gramos,precio 
      from productos where id='$id'";
					}else{
						$sql="SELECT id,nombres,fabricante,tipo,gramos,precio
						from productos";
					}
				}else{
					$sql="SELECT id,nombres,fabricante,tipo,gramos,precio
						from productos";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						     $ver[1]."||".
						     $ver[2]."||".
                             $ver[3]."||".
                             $ver[4]."||".
                             $ver[5];    
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
                <td><?php echo $ver[5] ?></td>

				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalLista" onclick="agregaform('<?php echo $datos ?>')">
						
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
</div>