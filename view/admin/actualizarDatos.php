<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombres'];
	$f=$_POST['fabricante'];
	$t=$_POST['tipo'];
    $g=$_POST['gramos'];
    $p=$_POST['precio'];

	$sql="UPDATE productos set nombres='$n',
								fabricante='$f',
								tipo='$t',
								gramos='$g'
                                precio='$p'
                                
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>