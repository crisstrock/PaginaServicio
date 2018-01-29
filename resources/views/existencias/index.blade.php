@extends('layouts.admin')

@section('content')


<table class="table">
	<thead>
		<th>Salas</th>
		<th>Opciones</th>
	</thead>


	@foreach($lugars as $lugar)
	<tbody>
		<td>
			{{ $lugar->nombre }}
		</td>

		<td>
			{!!link_to_route('exist.create', $title = 'Agregar Existancia', $parameters = $lugar->nombre, $attributes = ['class'=>'btn btn-primary'])!!}
		</td>
	</tbody>
@endforeach

</table>

@endsection