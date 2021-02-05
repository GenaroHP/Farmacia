<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$e=$_POST['email'];
	$c=$_POST['clave'];
    $c=$_POST['cargo'];
    
	$sql="UPDATE usuarios set nombre='$n',
								email='$e',
								clave='$c',
								cargo='$c'
                                
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>