<div class="form-group">
	{!!Form::label('Id_Itema','Id del Item:')!!}
	{!!Form::text('item_id',$pcs->item_id,['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('Num_maquina','Numero de Maquina:')!!}
	{!!Form::text('num_maquina',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Numero de Maquina'])!!}
</div>
<div class="form-group">
	{!!Form::label('Tiene_camara','Tiene Camara:')!!}
	{!!Form::text('tiene_camara',null,['class'=>'form-control', 'placeholder'=>'Ingresa el numero 0 si no y en caso contrarío ingresa 1'])!!}
</div>
<div class="form-group">
	{!!Form::label('Tiene_bocinas','Tiene Bocinas:')!!}
	{!!Form::text('tiene_bocinas',null,['class'=>'form-control', 'placeholder'=>'Ingresa el numero 0 si no y en caso contrarío ingresa 1'])!!}
</div>

<div class="form-group">
	{!!Form::label('Num_serie','Numero de serie del CPU:')!!}
	{!!Form::text('num_serie_cpu',null,['class'=>'form-control', 'placeholder'=>'Ingresa el numero de Serie'])!!}
</div>
<div class="form-group">
	{!!Form::label('Ram','RAM:')!!}
	{!!Form::text('ram',null,['class'=>'form-control', 'placeholder'=>'Ingresa la Descripción de la RAM'])!!}
</div>

<div class="form-group">
	{!!Form::label('DiscoDuro','Disco Duro:')!!}
	{!!Form::text('disco_duro',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del Disco Duro'])!!}
</div>
<div class="form-group">
	{!!Form::label('SistemaOperativo','Sistema Operativo:')!!}
	{!!Form::text('sistema_operativo',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del Sistema Operativo'])!!}
</div>
<div class="form-group">
	<legend>Sistema Operativo Activado</legend>
	{!!Form::text('sistema_operativo_activado',null,['class'=>'form-control', 'placeholder'=>'Ingresa el numero 0 si no y en caso contrarío ingresa 1'])!!}
</div>
<div class="form-group">
	{!!Form::label('CableVGA','Cable VGA:')!!}
	{!!Form::text('cable_vga',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del cable VGA'])!!}
</div>
<div class="form-group">
	{!!Form::label('Tiene_monitor','Tiene Monitor:')!!}
	{!!Form::text('tiene_monitor',null,['class'=>'form-control', 'placeholder'=>'Ingresa el numero 0 si no y en caso contrarío ingresa 1'])!!}
</div>
<div class="form-group">
	{!!Form::label('Num_S_Monitor','Numero de Serie del Monitor:')!!}
	{!!Form::text('num_serie_monitor',null,['class'=>'form-control', 'placeholder'=>'Ingresa el numero de serie del monitor'])!!}
</div>
<div class="form-group">
	{!!Form::label('Teclado','Tiene Teclado:')!!}
	{!!Form::text('tiene_teclado',null,['class'=>'form-control', 'placeholder'=>'Ingresa el numero 0 si no y encasi contrarío ingresa 1'])!!}
</div>
<div class="form-group">
	{!!Form::label('Mouse','Tiene Mouse:')!!}
	{!!Form::text('tiene_raton',null,['class'=>'form-control', 'placeholder'=>'Ingresa el numero 0 si no y encasi contrarío ingresa 1'])!!}
</div>
<div class="form-group">
	{!!Form::label('CRed','Controlador de Red:')!!}
	{!!Form::text('controlador_red',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Controlador de Red'])!!}
</div>
<div class="form-group">
	{!!Form::label('Paq_Offi_Ver','Versión de la paquetería Office:')!!}
	{!!Form::text('paq_office_version',null,['class'=>'form-control', 'placeholder'=>'Ingresa la versión del office'])!!}
</div>
<div class="form-group">
	{!!Form::label('Paq_Offi_Act','El Paquete Office esta Activado:')!!}
	{!!Form::text('paq_office_activado',null,['class'=>'form-control', 'placeholder'=>'Ingresa el numero 0 si no y en caso contrarío ingresa 1'])!!}
</div>
<div class="form-group">
	{!!Form::label('Observaciones','Observaciones:')!!}
	{!!Form::textarea('observaciones',null,['class'=>'form-control', 'placeholder'=>'Escribe todas las observaciones'])!!}
</div>