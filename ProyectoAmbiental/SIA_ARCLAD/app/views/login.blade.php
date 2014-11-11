<!doctype html>
<html>
    <head>
        {{ HTML::style('css/bootstrap.min.css') }}<!-- Bootstrap core CSS -->
        {{ HTML::style('css/login.css') }}<!-- Custom styles for this template -->
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-lock"></span> Login</div>
                        <div class="panel-body">
                            {{ Form::open(array('url' => 'login','class'=>'form-horizontal','role0'=>'form')) }}
                            <div class="form-group">

                                <!-- if there are login errors, show them here -->

                                {{Form::label('name','Usuario',array('for'=>'inputEmail13','class'=>'col-sm-3 control-label'))}}

                                <div class="col-sm-9">
                                    {{ Form::text('username', Input::old('email'), array('placeholder' => 'Nombre de Usuario','class'=>'form-control', 'required'=>'required')) }}
                                    @if($errors->has('username'))<p class="alert alert-danger">{{ $errors->first('username') }}</p>@endif
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('password','Password',array('class'=>'col-sm-3 control-label','for'=>'inputPassword3'))}}
                                <div class="col-sm-9">

                                    {{ Form::password('password',array('class'=>'form-control','placeholder'=>'Password', 'required'=>'required')) }}
                                    @if($errors->has('password'))<p class="alert alert-danger">{{ $errors->first('password') }}</p>@endif
                                </div>
                            </div>

                            <div class="form-group last">
                                <div class="col-sm-offset-3 col-sm-9">
                                    {{ Form::submit('Submit!',array('class'=>"btn btn-success btn-sm")) }}

                                    <button type="reset" class="btn btn-default btn-sm">
                                        Reset</button>
                                </div>
                            </div>
                            {{ Form::close()}}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        {{HTML::script('js/jquery.min.js')}}
        {{ HTML::script('js/bootstrap.min.js') }}
    </body>
</html>>