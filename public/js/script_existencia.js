$("#guardar_lugar").click(function(){
	var dato = $("#item_id").val();
	//var dato = $("#lugar").val();
	var route = "http://localhost:8000/mobi/"+value+"";
	var token = $("#token").val();

	console.log(route);
	/*$.ajax({
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
	});*/
});