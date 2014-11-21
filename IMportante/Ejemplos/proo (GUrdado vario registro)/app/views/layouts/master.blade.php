<htm
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SIA</title>

    <!-- Bootstrap core CSS -->
    
    {{HTML::style('bootstrap/css/bootstrap.min.css')}}
    <!-- <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    {{HTML::style('bootstrap/css/offcanvas.css')}}
    {{HTML::style('bootstrap/css/.css')}}  
    <!--<link href="/bootstrap/css/offcanvas.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div  class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        
          
          
          <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project SIA</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            
            
            <li><a href="#about">Planeacion Ambiental</a></li>
            
            
            <li>          
                
                <a href="#contact">Entrada de Recursos </a></li>
          
          <li class="dropdown">
                <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">link 1</a></li>
                  <li><a href="#">link 2</a></li>
                  <li><a href="#">linnk 3</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">sub link2 </a></li>
                  <li><a href="#">sub link3 </a></li>
                </ul>
          </li>
  
          
          </ul>
            
            
            
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            
          <p class="pull-right visible-xs">
            @yield('boton')
          </p>
          
             @yield('content')
          
          
          
          
          
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            @yield('menulateral')
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{HTML::script('bootstrap/js/bootstrap.min.js')}}
   {{HTML::script('bootstrap/js/offcanvas.js')}}
 
    <!--<script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap/js/offcanvas.js"></script>-->
  </body>
</html>
