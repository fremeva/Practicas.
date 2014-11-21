@extends('layouts.master')
@section('sidebar')
    @parent
    lista de equipos
    @stop

    @section('content')

  @if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
 
        
       <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">EQUIPOS</div>

  <!-- Table -->
  
  <table class="table" > 
      <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>REFERENCIA</td>
            <td>SEDE</td>
            <td>ACTION</td>
        </tr>
         @foreach($equipos as $equipo)
        <tr>  
            
        <td>{{$equipo->id}} </td>
           <td> {{$equipo->name}}</td>
           <td>{{$equipo->referencia}}</td>
            <td>{{$equipo->sede}}</td>
            <td>{{Form::open(array('route'=>array('equipos.destroy',$equipo->id)))}}
                
                {{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}    </td>
    </tr>
    @endforeach
    </table>
        <h2>
       {{HTML::link('equipos/create','Crear Nuevo Equipo')}}
        
        </h2>
        
        
</div>
        
    @stop  


            
        
        

    
        