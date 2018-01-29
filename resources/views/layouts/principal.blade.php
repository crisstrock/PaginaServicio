<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inventario Sistemas</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/estilos.css">
</head>
<body>
	

	@include('alerts.errors') 
<h1>Inventario de laboratorios</h1>


	

        @yield('content')
            
     

	<footer>
		<p>Copyright 2017, strockssystem</p>
	</footer>
	
{!! Html::script('js/formulario.js') !!}
{!! Html::script('js/jquery.min.js') !!}

	

</body>
</html>