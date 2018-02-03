
@extends('layouts.admin')

@section('content')

@include('alerts.request')


		
		
		{!!Form::model($pcs,['route'=> ['pc.update',$pcs->item_id],'method'=>'PUT'])!!}

			@include('pcs.forms.pc_edit')

			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['pc.destroy',$pcs->item_id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
		


	@endsection