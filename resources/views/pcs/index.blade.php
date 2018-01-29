@extends('layouts.admin')

@section('content')

<div class="form-group">
		{!! Form::label('Buscar:') !!}
		{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Buscar...']) !!}
	</div>

<table class="table">
	<thead>
		<th>Reportes</th>
		<th>Opciones</th>
	</thead>


	@foreach($salas as $sala)
	<tbody>
		<td>
		{{ $sala->nombre }}
		</td>

		<td>
			{!!link_to_route('report.show', $title = 'Revisiones', $parameters = $sala->nombre, $attributes = ['class'=>'btn btn-primary'])!!}
		</td>
	</tbody>
@endforeach

</table>

@endsection