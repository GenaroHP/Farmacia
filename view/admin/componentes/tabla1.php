
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
 <div class="container">
		<div id="tabla1"></div>
	</div>
	<div class="col-sm-12">
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

				$result=mysqli_query($conexion,$sql);
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