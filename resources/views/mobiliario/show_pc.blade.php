@extends('layouts.admin')

@section('content')


<table class="table">
	<thead>
		<th>Foto</th>
		<th>Clasificación</th>
		<th>Modelo</th>
		<th>Marca</th>
		<th>Fecha de creación</th>
		<th>numero de maquina</th>
		<th>Opciones</th>
	</thead>


	@foreach($mobis as $mobi)

	@if($mobi->clasificacion == "Pc")
	
	@foreach($pcs as $pc)
	
	@if($pc->item_id == $mobi->id)

	@include('mobiliario.forms_show.ver_pcs')

@endif
	@endforeach

	@endif


	@endforeach

</table>

@endsection