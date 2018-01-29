<table class="table">
        <thead>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>Operación</th>
        </thead>

        @foreach($users as $user)
        <tbody>
            <td>
                <img src="img/{{ $user -> path }}" alt="" style="width: 100px; height: 100px;"/>
            </td>
            <td>{{ $user -> nombre }}</td>
            <td>{{ $user -> email }}</td>
            <td>{{ $user -> tipo_usuario }}</td>
            <td>
            {!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']); !!}
            </td>
        </tbody>
        @endforeach
    </table>

    {!! $users->render() !!}