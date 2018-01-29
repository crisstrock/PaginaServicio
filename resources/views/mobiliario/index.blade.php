@extends('layouts.admin')

@section('content')


<table class="table">
	<thead>
		<th>Salas</th>
		<th>Opciones</th>
	</thead>


	@foreach($lugares as $lugar)
	<tbody>
		<td>

		{{ $lugar->nombre }}
		</td>

		<td>
			{!!link_to_route('mobi.show', $title = 'Mobiliario y Equipo', $parameters = $lugar->nombre, $attributes = ['class'=>'btn btn-primary'])!!}
			{!!link_to_route('pc.show', $title = 'Computadoras', $parameters = $lugar->nombre, $attributes = ['class'=>'btn btn-primary'])!!}
		</td>
	</tbody>
@endforeach

</table>

@endsection