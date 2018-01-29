@extends('layouts.principal')

@section('content')

   <div class="contenedor-formulario">
    

        <div class="wrap">


            
        {!! Form::open(['url' => 'password/email']) !!}
            <div class="input-group">
                {!! Form::label('correo','Correo:') !!}
                {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu email']) !!}
            </div>
            
            {!! Form::submit('Enviar link', ['class'=>'btn-submit']) !!}

        {!! Form::close() !!}

        </div>      
    </div> 

     

@endsection