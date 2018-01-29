@extends('layouts.admin')

@section('content')

@include('alerts.request')

	  	{!!Form::open(['route'=>'exist.store', 'method'=>'POST','files' => true])!!}
	  	
	  		@include('existencias.forms.existencia')

			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			
		{!!Form::close()!!}

@endsection