@extends('layouts.admin')

@section('content')

{!!Form::open()!!}

	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
		<strong>Lugar agregado correctamente</strong>
	</div>

	<div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
		<strong id="msj"> </strong>
	</div>

	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

	@include('lugar.forms.lugar')
	
	{!! link_to('#', $tittle='Agregar', $attributes = ['id'=>'agregar', 'class'=>'btn btn-primary'], $secure=null) !!}
	
{!! Form::close() !!}

@endsection

@section('scripts')

	{!! Html::script('js/script.js') !!}
	
@endsection