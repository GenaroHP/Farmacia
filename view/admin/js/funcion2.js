function agregaform(datos){

	d=datos.split('||');

	$('#idusuarios').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#correou').val(d[2]);
	$('#claveu').val(d[3]);
	$('#cargou').val(d[4]);

	
}
function actualizarDatos(){


	id=$('#idusuarios').val();
	nombre=$('#nombreu').val();
	email=$('#correou').val();
	clave=$('#claveu').val();
	cargo=$('#cargou').val();
	

	cadena= "id=" + id +
			"&nombre=" + nombres + 
			"&email=" + email +
			"&clave=" + clave +
			"&cargo=" + cargo;
			

	$.ajax({
		type:"POST",
		url:"php/actualizar3.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla2').load('componentes/tabla2.php');
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
			url:"php/eliminarDatos2.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla2').load('componentes/tabla2.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}