@extends('layouts.admin')

@section('content')

@include('alerts.request')

{!! Form::open(['route'=>'revisiondet.store', 'method'=>'POST']) !!}
	
	@include('revisionesdet.forms.revisiondetalle')

	{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection