@extends('layouts.admin')

@section('content')

<div class="items">

{!! link_to_route('mobi.create', $title = 'Agregar Item', $parameters = null, $attributes = ['class'=>'btn btn-primary']); !!}

<table class="table">
	
	<thead>
		<th>Foto</th>
		<th>Clasificación</th>
		<th>Modelo</th>
		<th>Marca</th>
		<th>Fecha de creación</th>
		<th>Opciones</th>
	</thead>


	@foreach($items as $item)
	<tbody>

		<td>
        <img src="img/{{ $item->path }}" alt="" style="width: 100px; height: 100px;"/>
        </td>

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
			
			{!!link_to_route('exist.edit', $title = 'Agregar Lugar', $parameters = $item->id, $attributes = ['id'=>'agregar_existencia', 'class'=>'btn btn-primary'])!!}
		@if($item->clasificacion == "Pc")
			{!!link_to_route('pc.show', $title = 'Agregar datos pc', $parameters = $item->id, $attributes = ['class'=>'btn btn-primary'])!!}
		@endif
		</td>
	</tbody>
@endforeach

</table>

</div>

@endsection

@section('scripts')

	{!! Html::script('js/script_existencia.js') !!}
	
@endsection