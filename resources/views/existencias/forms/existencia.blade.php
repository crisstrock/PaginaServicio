
<div class="form-group">
	{!!Form::label('Lugar','Lugar:')!!}
	{!!Form::select('lugar_id', $lugars)!!}
</div>
<div class="form-group">
	{!!Form::label('Item','Id del Item:')!!}
	{!!Form::text('item_id', $item_id->id ,['class'=>'form-control'])!!}
</div>

