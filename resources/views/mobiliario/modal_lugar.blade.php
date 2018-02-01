<div class="modal fade" id="myModalItem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Asignar item a un lugar</h4>

      </div>

      <div class="modal-body">
      <!--Input oculto donde esta el token para identificar la peticion ante laravel--> 
      	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <!--Input donde se le asigna el ID correspondiente al item-->
      	<input type="hidden" id="item_id">
        
        <!--Subvista que es formulario para crear la sala-->
        @include('existencias.forms.existencia')

      </div>

      <div class="modal-footer">
      <!--Aqui tenemos el link con Id actualizar que es el que desencadena el evento para enviar la informacion y actualizarla-->
      {!!link_to('#', $title='Guardar', $attributes = ['id'=>'guardar_lugar', 'class'=>'btn btn-primary'], $secure = null)!!}
      </div>

    </div>

  </div>

</div>