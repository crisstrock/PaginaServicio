@extends('layouts.principal')

@section('content')



<div align="center">
    <figure> 
        <img src="img/ittg.png" alt="" class="fijo-izquierda">
    </figure>
</div>

<div align="center">
    <figure> 
        <img src="img/isc.jpg" alt="" class="fijo-derecha">
    </figure>
</div>

   <div class="contenedor-formulario">
    

        <div class="wrap">
            {!! Form::open(['route'=>'login.store', 'method'=>'POST', 'class'=>'formulario', 'name'=>'formulario-registro']) !!}
        <div class="input-group">
                {!! Form::label('correo','Correo:') !!}
                {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu email']) !!}
            </div>
            <div class="input-group">
                {!! Form::label('contrasena','Contraseña:') !!}
                {!! Form::password('password',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu Contraseña']) !!}

                

            </div>
            
            {!! Form::submit('Iniciar sesión', ['class'=>'btn-submit']) !!}

        {!! Form::close() !!}

        {!! link_to('/password/email', $title = 'Olvidaste tu contraseña?', $attributes = null, $secure = null) !!}

        </div>      
    </div> 

     

@endsection