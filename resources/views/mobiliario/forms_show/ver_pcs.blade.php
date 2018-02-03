<tbody>
		<td>
        <img src="img/{{ $mobi->path }}" alt="" style="width: 100px; height: 100px;"/>
        </td>

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
		{{ $pc->num_maquina }}
		</td>
		<td>
			
			{!!link_to_route('mobi.edit', $title = 'Editar Item', $parameters = $mobi->id, $attributes = ['class'=>'btn btn-primary'])!!}
			{!!link_to_route('pc.edit', $title = 'Editar campo Pc', $parameters = $pc->item_id, $attributes = ['class'=>'btn btn-primary'])!!}
		</td>
</tbody>
