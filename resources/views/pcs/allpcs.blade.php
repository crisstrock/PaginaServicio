@extends('layouts.admin')

@section('content')

<div class="form-group">
		{!! Form::label('Buscar:') !!}
		{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Buscar...']) !!}
	</div>

<table class="table">
	<thead>
		<th>Marca</th>
		<th>Monitor</th>
		<th>Mouse</th>
		<th>Teclado</th>
		<th>Sala</th>
		<th>Foto</th>
		<th>Operacion</th>
	</thead>

	@foreach($compus as $compu)
	<tbody>
		<td>{{ $compu->marca }}</td>
		<td>{{ $compu->monitor }}</td>
		<td>{{ $compu->mouse }}</td>
		<td>{{ $compu->teclado }}</td>
		<td>{{ $compu->nombre }}</td>
		<td>
			<img src="compus/{{ $compu->path }}" alt="" style="width: 100px;"/>
		</td>
		<td>
			{!!link_to_route('compu.edit', $title = 'Editar', $parameters = $compu->id, $attributes = ['class'=>'btn btn-primary'])!!}
		</td>
	</tbody>
@endforeach

</table>

@endsection