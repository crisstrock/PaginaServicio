$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://localhost:8000/lugares";

	$("#datos").empty();

	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.nombre+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class=\"btn btn-primary\" data-toggle='modal' data-target='#myModal'>Editar</button><button class=\"btn btn-danger\" value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});	
}

function Eliminar(btn){
	var route = "http://localhost:8000/lugar/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		method: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-success2").fadeIn();
		}
	});
}

function Mostrar(btn){
	//console.log(btn.value);
	var route = "http://localhost:8000/lugar/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#lugar").val(res.nombre);
		$("#id").val(res.id);
	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#lugar").val();
	var route = "http://localhost:8000/lugar/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		method: 'PUT',
		dataType: 'json',
		data: {nombre: dato},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});