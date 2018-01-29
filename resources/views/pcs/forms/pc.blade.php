<div class="form-group">
	{!!Form::label('Num_maquina','Numero de Maquina:')!!}
	{!!Form::text('num_serie',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Numero de Maquina'])!!}
</div>
<div class="form-group">
	{!!Form::label('Perifericos','Perifericos:')!!}
	{!!Form::text('teclado',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Detalle de los Perifericos'])!!}
</div>
<div class="form-group">
	<legend>Funciona</legend>
		{{  Form::select('funciona', array(
  			'Selecciona' => array('Si','No'),
		))}}
	</div>

<div class="form-group">
	{!!Form::label('Num_serie','Numero de serie:')!!}
	{!!Form::text('num_serie',null,['class'=>'form-control', 'placeholder'=>'Ingresa el numero de Serie'])!!}
</div>
<div class="form-group">
	{!!Form::label('Ram','RAM:')!!}
	{!!Form::text('marca',null,['class'=>'form-control', 'placeholder'=>'Ingresa la Descripción de la RAM'])!!}
</div>

<div class="form-group">
	{!!Form::label('DiscoDuro','Disco Duro:')!!}
	{!!Form::text('marca',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del Disco Duro'])!!}
</div>
<div class="form-group">
	{!!Form::label('SistemaOperativo','Sistema Operativo:')!!}
	{!!Form::text('marca',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del Sistema Operativo'])!!}
</div>
<div class="form-group">
	<legend>Sistema Operativo Activado</legend>
		{{  Form::select('soactivado', array(
  			'Selecciona' => array('Si','No'),
		))}}
</div>
<div class="form-group">
	{!!Form::label('CableVGA','Cable VGA:')!!}
	{!!Form::text('monitor',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del cable VGA'])!!}
</div>
<div class="form-group">
	<legend>Funciona el Monitor</legend>
		{{  Form::select('monitor', array(
  			'Selecciona' => array('Si','No'),
		))}}
</div>
<div class="form-group">
	{!!Form::label('Monitor','Monitor:')!!}
	{!!Form::text('monitor',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del monitor'])!!}
</div>
<div class="form-group">
	{!!Form::label('NSerieMonitor','Numero de Serie del Monitor:')!!}
	{!!Form::text('monitor',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Numero de Serie del Monitor'])!!}
</div>
<div class="form-group">
	{!!Form::label('Teclado','Teclado:')!!}
	{!!Form::text('teclado',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del taclado'])!!}
</div>
<div class="form-group">
	{!!Form::label('Mouse','Mouse:')!!}
	{!!Form::text('mouse',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del mouse'])!!}
</div>
<div class="form-group">
	{!!Form::label('CRed','Controlador de Red:')!!}
	{!!Form::text('mouse',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Controlador de Red'])!!}
</div>


<div class="form-group">
	{!!Form::label('Foto','Foto:')!!}
	{!!Form::file('path')!!}
</div>
<div class="form-group">
	{!!Form::label('Item','Item:')!!}
	{!!Form::select('item_id', $item)!!}
</div>