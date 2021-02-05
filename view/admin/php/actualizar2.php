<?php 
	$id=$_POST['id'];
	$p=$_POST['producto'];
	$t=$_POST['tipo'];
	$f=$_POST['fabricado'];
    $c=$_POST['comprado'];
    $p=$_POST['precio'];
    $c=$_POST['cantidad'];
    $v=$_POST['vence'];

	$sql="UPDATE perf_producto set producto='$p',
								tipo='$t',
								fabricado='$f',
								comprado='$c'
                                precio='$p'
                                cantidad='$c'
                                vence='$v'
                                
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>