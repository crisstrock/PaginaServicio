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
			
			{!!link_to_route('mobi.edit', $title = 'Editar', $parameters = $mobi->id, $attributes = ['class'=>'btn btn-primary'])!!}
		</td>
</tbody>