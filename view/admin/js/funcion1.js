function agregaform(datos){

	d=datos.split('||');

	$('#idproductos').val(d[0]);
	$('#nombresp').val(d[1]);
	$('#fabricantep').val(d[2]);
	$('#tipop').val(d[3]);
	$('#gramosp').val(d[4]);
	$('#preciop').val(d[5]);
	
}
function actualizarProducto(){


	id=$('#idproductos').val();
	nombres=$('#nombresp').val();
	fabricante=$('#fabricantep').val();
	tipo=$('#tipop').val();
	gramos=$('#gramosp').val();
	precio=$('#preciop').val();

	cadena= "id=" + id +
			"&nombres=" + nombres + 
			"&fabricante=" + fabricante +
			"&tipo=" + tipo +
			"&gramos=" + gramos;
			"&precio=" + precio;

	$.ajax({
		type:"POST",
		url:"php/actualizar1.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
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
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}