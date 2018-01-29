@extends('layouts.admin')

@section('content')

@include('alerts.request')

{!! Form::open(['route'=>'revisionrap.store', 'method'=>'POST']) !!}
	
	@include('revisionesrap.forms.revisionform')

	{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection