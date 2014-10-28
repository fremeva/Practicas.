<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        {{ HTML::style('css/bootstrap.min.css') }}<!-- Bootstrap core CSS -->
        {{ HTML::style('css/offcanvas.css') }}<!-- Custom styles for this template -->
        {{ HTML::style('css/font-awesome.min.css')}}<!-- Font Awesome core CSS -->
    </head>
    <body>
        <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><em>Sistema Ambiental ARclad S.A</em></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-home fa-lg">  </i> Inicio</a></li>
                        <li class="dropdown">
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-paper-plane-o fa-lg"></i> Planeación Ambiental <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Objetivos Estrategicos</a></li>
                                <li><a href="#">Estrategias</a></li>

                                <li class="divider"></li>
                                <li class="dropdown-header">Resgistros </li>
                                <li><a href="#">Indetificación y evalución legal </a></li>
                                <li><a href="#">Riesgo Ambiental </a></li>
                            </ul>

                        </li>


                        <li class="dropdown">
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-database fa-lg"></i> Entrada Recursos  <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                                <li class="divider"></li>
                                <li class="dropdown-header">Agua</li>

                                <li><a href="#">Descripción del proceso </a></li>
                                <li><a href="#">Equipos e Inventario de consumo</a></li>
                                <li><a href="#">otros</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Energía</li>
                                <li><a href="#">Inventario de equipos y insumos</a></li>
                                <li><a href="#">otros </a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Combustibles</li>
                                <li><a href="#">Inventarios de equipos y consumos </a></li>

                                <li class="divider"></li>
                                <li class="dropdown-header">Materiales</li>
                                <li><a href="#">Listado de S.Q  </a></li>
                                <li><a href="#">Mariales comprados por Origen</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav pull-right" >   <li class="dropdown">
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown">   <i class="fa fa-user fa-lg"></i> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><i class="fa fa-eye fa-fw"> </i> Ver perfil</a></li>
                                <li><a href="#"> <i class="fa fa-pencil fa-fw"></i> Editar perfil</a></li>

                                <li class="divider"></li>
                                <li><a href="{{URL::to('logout')}}"> <i class="fa fa-power-off fa-fw"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul> 
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </div><!-- /.navbar -->

        <div class="container">
            @yield('content')
            
            @section('footer')
            <footer>
                <p>&copy; Company 2014</p>
            </footer>
            @show
        </div><!--/.container-->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        {{HTML::script('js/jquery.min.js')}}
        {{ HTML::script('js/bootstrap.min.js') }}
    </body>
</html>