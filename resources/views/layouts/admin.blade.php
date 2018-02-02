<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario Servicio Social</title>

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}

</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!! URL::to('/admin') !!}">Inventario Servicio Social</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                         <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{!! URL::to('/usuario/perfil') !!}"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="{!!URL::to('/mail/show')!!}"><i class="fa fa fa-envelope-o fa-fw"></i> Contacto</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                    

                        <li>
                                <li>
                                    <a href="{!! URL::to('/usuario') !!}"><i class='fa fa-users fa-fw'></i> Usuarios</a>
                                </li>
                        </li>

                    
                
                        

                        <li>
                            <a href="#"><i class="fa fa-desktop fa-fw"></i> Inventario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                <a href="#"><i class="fa fa-desktop fa-fw"></i> Mobiliario y Equipo<span class="fa arrow"></span></a>

                                <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/mobi') !!}"><i class='fa fa-plus fa-fw'></i> Items</a>
                                </li>

                                <li>
                                    <a href=""><i class='fa fa-list-ol fa-fw'></i> Buscar</a>
                                </li>
                            </ul>

                            </li>

                            <li>
                                <a href="#"><i class="fa fa-desktop fa-fw"></i> Salas<span class="fa arrow"></span></a>

                                <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/lugar/create') !!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/lugar') !!}"><i class='fa fa-list-ol fa-fw'></i> Buscar</a>
                                </li>
                            </ul>


                            </li>

                            </ul>
                        </li>


                        <li>
                            
                                <li>
                                    <a href="{!! URL::to('/mobi/show') !!}"><i class="fa fa-file-text fa-fw"></i> Existencias</a>
                                </li>
                            
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-file-text fa-fw"></i> Revisiones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                            <a href="#"><i class="fa fa-file-text fa-fw"></i> Agregar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/revisionrap/create') !!}" name="rap" value="rap"><i class='fa fa-plus fa-fw'></i> R. rápida</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/revisiondet/create') !!}"><i class='fa fa-plus fa-fw'></i> R. detallada</a>
                                </li>
                            </ul>
                        </li>
                            
                                <li>
                                    <a href="{!! URL::to('/revisionrap') !!}"><i class='fa fa-list-ol fa-fw'></i> Revisiones Rápidas</a>
                                </li>

                                <li>
                                    <a href="{!! URL::to('/revisiondet') !!}"><i class='fa fa-list-ol fa-fw'></i> Revisiones Detalladas</a>
                                </li>
                            </ul>
                        </li>

                    

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">

        @yield('content')
            
        </div>

    </div>
    

    {!! Html::script('js/jquery.min.js') !!}
    
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/metisMenu.min.js') !!}
    {!! Html::script('js/sb-admin-2.js') !!}

    @section('scripts')
    @show

</body>

</html>