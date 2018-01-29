@extends('layouts.admin')

@section('content')

@include('alerts.request')

	  	{!!Form::open(['route'=>'pc.store', 'method'=>'POST','files' => true])!!}
	  		@include('pcs.forms.pc')
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

@endsection