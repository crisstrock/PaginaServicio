@extends('layouts.admin')

@include('alerts.success')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">Peril de Usuario <small>nombre...</small></h1>
        <ol class="breadcrum">
            <li>Index</li>
            <li>Nombre</li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-md-3">
        <div class="col-md-12" align="center">
            <img class="img-responsive img-portfolio img-hover" src="public/favicon.ico">
        </div>
        <div class="col-md-12">
            <p class="text-center"><strong>Nombre Apellido</strong></p>
            <p class="text-center"><em>Titulo de perfil usuario</em></p>
        </div>

        <div class="col-md-12 text-center">
            <!--Redes sociales-->
            <ul>
                <li>
                    <a href="#"><i class="editIcons icon-facebook-square editSizeIcons"></i></a>
                </li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>


        <div class="col-md-12">
            <br>
            <ul class="list-group list-primary">
                <a href="#" class="list-group-item">Biografia</a>
                <a href="#" class="list-group-item">Fotografias</a>
                <a href="#" class="list-group-item">Preferencias</a>
                <a href="#" class="list-group-item">Mensajes</a>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {!! Html::script('js/script3.js') !!}
@endsection