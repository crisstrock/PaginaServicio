@extends('layouts.admin')

@section('content')



<div class="contact-form">
@include('alerts.request')
	<h3 class="head">Enviar E-mail</h3>
	<p>Siempre estamos aquí para ayudarte</p>
	<div class="contact-form">
		{!! Form::open(['route'=>'mail.store', 'method'=>'POST']) !!}
			<div class="col-md-6 contact-left">
				{!! Form::text('nombre',null,['placeholder'=>'Nombre']) !!}
				{!! Form::text('email',null,['placeholder'=>'E-mail']) !!}
			</div>
			<div class="col-md-6 contact-right">
				{!! Form::textarea('mensaje',null,['placeholder'=>'Mensaje']) !!}
			</div>
			{!! Form::submit('Enviar') !!}
		{!! Form::close() !!}
	</div>
</div>

@endsection