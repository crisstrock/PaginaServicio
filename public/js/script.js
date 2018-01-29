$("#agregar").click(function(){
	var dato = $("#nombre").val();
	var route = "http://localhost:8000/lugar";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		method: 'POST',
		dataType: 'json',
		data: {nombre: dato},

		success:function(){
			$("#msj-success").fadeIn();
		},

		error:function(msj){
			console.log(msj.responseJSON.nombre);
			$("#msj").html(msj.responseJSON.nombre);
			$("#msj-error").fadeIn();
		},

	});
});
