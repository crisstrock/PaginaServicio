@extends('layouts.admin')

@section('content')

<div class="items">

{!! link_to_route('mobi.create', $title = 'Agregar Item', $parameters = null, $attributes = ['class'=>'btn btn-primary']); !!}

<table class="table">
	
	<thead>
		<th>Clasificación</th>
		<th>Modelo</th>
		<th>Marca</th>
		<th>Creado</th>
		<th>Opciones</th>
	</thead>


	@foreach($items as $item)
	<tbody>
		<td>

		{{ $item->clasificacion }}
		</td>

		<td>

		{{ $item->modelo }}
		</td>
		<td>

		{{ $item->marca }}
		</td>
		<td>

		{{ $item->created_at }}
		</td>

		<td>
			
			{!!link_to_route('mobi.edit', $title = 'Agregar Lugar', $parameters = $item->id, $attributes = ['class'=>'btn btn-primary'])!!}
		@if($item->clasificacion == "Pc")
			{!!link_to_route('mobi.edit', $title = 'Datos pc', $parameters = $item->id, $attributes = ['class'=>'btn btn-primary'])!!}
		@endif
			{!!link_to_route('mobi.edit', $title = 'Editar', $parameters = $item->id, $attributes = ['class'=>'btn btn-primary'])!!}
		</td>
	</tbody>
@endforeach

</table>

</div>

@endsection