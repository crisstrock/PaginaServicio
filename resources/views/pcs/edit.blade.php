@extends('layouts.admin')

@section('content')

@include('alerts.request')
		
		{!!Form::model($computadoras,['route'=> ['compu.update',$computadoras->id],'method'=>'PUT','files' => true])!!}

			@include('compus.forms.compu')

			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['compu.destroy',$computadoras->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection