
<div class="form-group">
	{!!Form::label('Clasificación','Clasificación:')!!}
	{!!Form::select('clasificacion', $clasi, ['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('Descripcion','Descripción:')!!}
	{!!Form::text('descripcion',null,['class'=>'form-control', 'placeholder'=>'Ingresa el modelo'])!!}
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
<div class="form-group">
	{!!Form::label('Num_inventario','Numero de inventario:')!!}
	{!!Form::text('numero_inventario',null,['class'=>'form-control', 'placeholder'=>'Ingresa el estado'])!!}
</div>

<div class="form-group">
	{!!Form::label('Num_serie','Numero de serie:')!!}
	{!!Form::text('numero_serie',null,['class'=>'form-control', 'placeholder'=>'Ingresa la marca'])!!}
</div>
