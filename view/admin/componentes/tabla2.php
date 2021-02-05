<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="container">
		<div id="tabla2"></div>
	</div>
    <div class="col-sm-12">
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

				$result=mysqli_query($conexion,$sql);
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
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalAcceso" onclick="agregaform('<?php echo $datos ?>')">
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