@extends('layouts.admin')

@section('content')

@include('lugar.modal')

	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  		<strong> Lugar Actualizado Correctamente.</strong>
	</div>
	<div id="msj-success2" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  		<strong> Lugar Eliminado Correctamente.</strong>
	</div>

	<div class="form-group">
		{!! Form::label('Buscar:') !!}
		{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Buscar...']) !!}
	</div>

<table class="table">
	<thead>
		<th>Nombre</th>
		<th>Operaciones</th>
	</thead>
	
	<tbody id="datos">
		
	</tbody>	
		
</table>

@endsection

@section('scripts')
	{!! Html::script('js/script2.js') !!}
@endsection