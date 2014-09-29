<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        {{ HTML::style('css/bootstrap.min.css') }}<!-- Bootstrap core CSS -->
        {{ HTML::style('css/offcanvas.css') }}<!-- Custom styles for this template -->
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
                    <a class="navbar-brand" href="#">SIA ARclad </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#about">Planeacion Ambiental</a></li>
                        <li><a href="#contact">Entrada de Recursos</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </div><!-- /.navbar -->
        
        <div class="container">
            <div class="row row-offcanvas row-offcanvas-right">
                <div class="col-xs-12 col-sm-9">
                    <p class="pull-right visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                    </p>
                    @yield('content')
                </div><!--/span-->
                <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                    <div class="list-group">
                        <a class="list-group-item dropdown-header disabled">@yield('sesion_title')</a>
                        @yield('Toggle_nav')
                    </div>
                </div><!--/span-->
            </div><!--/row-->
            <hr>
            @section('footer')
            <footer>
                <p>&copy; Company 2014</p>
            </footer>
            @show
        </div><!--/.container-->
        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/offcanvas.js') }}
    </body>
</html>