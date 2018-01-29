<div class="form-group">
		<legend>Numero de Maquina</legend>
		{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre del usuario']) !!}
	</div>
	<div class="form-group">
		<legend>Perifericos</legend>
		{!! Form::text('lastName',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Apellido del usuario']) !!}
	</div>
	<div class="form-group">
		<legend>Funciona</legend>
		{!! Form::text('telefono',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Telefono del usuario']) !!}
	</div>
	<div class="form-group">
		<legend>Numero de serie del CPU</legend>
		{!! Form::text('tipo',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Tipo del usuario']) !!}
	</div>
	<div class="form-group">
		<legend>RAM</legend>
		{!! Form::text('edad',null,['class'=>'form-control', 'placeholder'=>'Ingresa la edad del usuario']) !!}
	</div>
	<div class="form-group">
	<legend>Disco Duro</legend>
		{{  Form::select('dd', array(
  			'Selecciona' => array('Si','No'),
		))}}
	</div>
	<div class="form-group">
	<legend>Sistema Operativo</legend>
		{{  Form::select('sistema', array(
  			'Selecciona' => array('Si','No'),
		))}}
	</div>
	<div class="form-group">
	<legend>Sistema Operativo Activado</legend>
		{{  Form::select('sistemoperativo', array(
  			'Selecciona' => array('Si','No'),
		))}}
	</div>
	<div class="form-group">
	<legend>Cable VGA</legend>
		{{  Form::select('vga', array(
  			'Selecciona' => array('Si','No'),
		))}}
	</div>
	<div class="form-group">
	<legend>Funciona Monitor</legend>
		{{  Form::select('monitor', array(
  			'Selecciona' => array('Si','No'),
		))}}
	</div>
	<div class="form-group">
	<legend>Numero Serie Monitor</legend>
		{{  Form::select('nserie', array(
  			'Selecciona' => array('Si','No'),
		))}}
	</div>
	<div class="form-group">
	<legend>Teclado</legend>
		{{  Form::select('tecla', array(
  			'Selecciona' => array('Si','No'),
		))}}
	</div>
	<div class="form-group">
	<legend>Ratón</legend>
		{{  Form::select('raton', array(
  			'Selecciona' => array('Si','No'),
		))}}
	</div>
	<div class="form-group">
	<legend>Controlador de Red</legend>
		{{  Form::select('conred', array(
  			'Selecciona' => array('Si','No'),
		))}}
	</div>