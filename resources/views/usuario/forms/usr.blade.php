<div class="form-group">
		<legend>Nombre</legend>
		{!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre del usuario']) !!}
	</div>

	<div class="form-group">
		<legend>Apellido</legend>
		{!! Form::text('apellido',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Apellido del usuario']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Telefono:') !!}
		{!! Form::text('telefono',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Telefono del usuario']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('Horas a cubrir:') !!}
		{!! Form::text('horas_cubrir',null,['class'=>'form-control', 'placeholder'=>'Ingresa las horas que cubrira el usuario']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('Tipo:') !!}
		{!! Form::text('tipo_usuario',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Tipo del usuario']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('Correo:') !!}
		{!! Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa el correo del usuario']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Contraseña:') !!}
		{!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa la contraseña del usuario']) !!}
	</div>

	<div class="form-group">
		{!!Form::label('Foto','Foto:')!!}
		{!!Form::file('path')!!}
	</div>