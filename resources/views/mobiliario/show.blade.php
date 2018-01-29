@extends('layouts.admin')

@section('content')


<table class="table">
	<thead>
		<th>Mobiliario</th>
		<th>Opciones</th>
	</thead>


	@foreach($mobis as $mobi)
	<tbody>
		<td>

		{{ $mobi->clasificacion }}
		</td>

		<td>

		{{ $mobi->modelo }}
		</td>
		<td>

		{{ $mobi->marca }}
		</td>
		<td>

		{{ $mobi->created_at }}
		</td>

		<td>
			
			{!!link_to_route('mobi.edit', $title = 'Editar', $parameters = $mobi->id, $attributes = ['class'=>'btn btn-primary'])!!}
		</td>
	</tbody>
@endforeach

</table>

@endsection