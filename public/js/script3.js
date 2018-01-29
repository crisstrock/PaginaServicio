$(document).on('click','.pagination a',function(e){
	e.preventDefault();
	var page = $(this).attr('href').split('page=')[1];
	var route = "http://localhost:8000/usuario";

	//console.log(page);
	$.ajax({
		url: route,
		data: {page: page},
		method: 'GET',
		dataType: 'json',
		success:function(data){

			$(".users").html(data);
		}
	});
});
