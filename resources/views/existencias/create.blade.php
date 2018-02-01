@extends('layouts.admin')

@section('content')

@include('alerts.request')

	  	{!!Form::open(['route'=>'exist.store', 'method'=>'POST'])!!}
	  	
	  		@include('existencias.forms.existencia')

			{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
			
		{!!Form::close()!!}

@endsection

