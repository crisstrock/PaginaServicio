
<div class="form-group">
	{!!Form::label('Clasificacion','Clasificación:')!!}
	{!!Form::text('clasificacion',null,['class'=>'form-control', 'placeholder'=>'Ingresa la clasificación'])!!}
</div>

<div class="form-group">
	{!!Form::label('Descripcion','Descripción:')!!}
	{!!Form::text('descripcion',null,['class'=>'form-control', 'placeholder'=>'Ingresa la descripción'])!!}
</div>

<div class="form-group">
	{!!Form::label('Modelo','Modelo:')!!}
	{!!Form::text('modelo',null,['class'=>'form-control', 'placeholder'=>'Ingresa el modelo'])!!}
</div>
<div class="form-group">
	{!!Form::label('Estado','Estado:')!!}
	{!!Form::text('estado',null,['class'=>'form-control', 'placeholder'=>'Ingresa el estado'])!!}
</div>

<div class="form-group">
	{!!Form::label('Marca','Marca:')!!}
	{!!Form::text('marca',null,['class'=>'form-control', 'placeholder'=>'Ingresa la marca'])!!}
</div>
<div class="form-group">
	{!!Form::label('Foto','Foto:')!!}
	{!!Form::file('path')!!}
</div>
