function agregaform(datos){

	d=datos.split('||');

	$('#idperfproducto').val(d[0]);
	$('#productop').val(d[1]);
	$('#tipop').val(d[2]);
	$('#fabricadop').val(d[3]);
	$('#compradop').val(d[4]);
	$('#preciop').val(d[5]);
	$('#cantidadp').val(d[6]);
	$('#vencep').val(d[7]);
	
}
function actualizarPerfiProducto(){


	id=$('#idperfproducto').val();
	producto=$('#productop').val();
	tipo=$('#tipop').val();
	fabricado=$('#fabricadop').val();
	comprado=$('#compradop').val();
	precio=$('#preciop').val();
	cantidad=$('#cantidadp').val();
	vence=$('#vencep').val();

	cadena= "id=" + id +
			"&producto=" + producto + 
			"&tipo=" + tipo +
			"&fabricado=" + fabricado +
			"&comprado=" + comprado;
			"&precio=" + precio;
			"&cantidad=" +cantidad;
			"&vence=" + vence;

	$.ajax({
		type:"POST",
		url:"php/actualizar2.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla1').load('componentes/tabla1.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos1.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla1').load('componentes/tabla1.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}