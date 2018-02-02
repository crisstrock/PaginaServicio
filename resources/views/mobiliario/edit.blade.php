@extends('layouts.admin')

@section('content')

@include('alerts.request')
		
		{!!Form::model($items,['route'=> ['mobi.update',$items->id],'method'=>'PUT','files' => true])!!}

			@include('mobiliario.forms.mobi_edit')

			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['mobi.destroy',$items->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection