@extends('layouts.admin')

@section('content')

@include('alerts.request')

	  	{!!Form::open(['route'=>'mobi.store', 'method'=>'POST','files' => true])!!}
	  	
	  		@include('mobiliario.forms.mobi')

			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			
		{!!Form::close()!!}

@endsection