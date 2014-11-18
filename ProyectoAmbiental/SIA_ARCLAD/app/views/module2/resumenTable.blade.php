<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Resumen Table
@stop

@section('content')

<ul class="nav nav-tabs" role="tablist">
  <li role="presentation"><a href="{{URL::to('aspects')}}">Aspectos Asociado</a></li>
  <li role="presentation"><a href="{{URL::to('requisites')}}">Requisitos Legales</a></li>
  <li role="presentation" class="active"><a href="{{URL::to('resumentable')}}">Ver Resumen</a></li>
  <li role="presentation" class="pull-right"><a href="{{URL::to('requisites/create')}}">Nuevo Requisito</a></li>
</ul>
@if (Session::has('message'))
<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                {{Session::get('message')}}
</div>
@endif

{{HTML::script('js/highcharts/highcharts.js')}}
{{HTML::script('js/highcharts/data.js')}}
{{HTML::script('js/highcharts/exporting.js')}}

<div id="container" style="min-width: 510px; height: 400px; margin: 0 auto"></div>

<table id="datatable" class="table">
	<thead>
		<tr>
			<th></th>
			<th>Si</th>
                        <th >No</th>
                        <th >A Terceros</th>
                        <th >Autoridades Ambientales</th>
                        <th >Gestores Ambientales</th>
                        <th >Solo Informativa</th>
                        <th >Proveedores</th>
		</tr>
	</thead>
	<tbody>
            <?php $indice = 0?>
        @foreach($aspects as $aspect)
		<tr>
			<th>{{$aspect->name}}</th>
			<td>{{$applicationMatriz[$indice]["Si"]}}</td>
            <td>{{$applicationMatriz[$indice]["No"]}}</td>
            <td>{{$applicationMatriz[$indice]["A Terceros"]}}</td>
            <td>{{$applicationMatriz[$indice]["Autoridades Ambientales"]}}</td>
            <td>{{$applicationMatriz[$indice]["Gestores Ambientales"]}}</td>
            <td>{{$applicationMatriz[$indice]["Solo Informativa"]}}</td>
            <td>{{$applicationMatriz[$indice]["Proveedores"]}}</td>
		</tr>
          <?php $indice++?>
        @endforeach
	</tbody>
</table>

<script>
    $(function () {
    $('#container').highcharts({
        data: {
            table: document.getElementById('datatable')
        },
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Resumen Por Aplicacion'
        },
         subtitle: {
            text: 'resumen de acuerdo a los aspectos asociados que cumplen o no cumplen en la empresa:'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Unidades'
            }
        },
        tooltip: {
            formatter: function () {
                return '<strong>' + this.series.name + '</strong><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
        
    });
});
</script>


<!--<ul class="nav nav-tabs" role="tablist">
  <li role="presentation"><a href="{{URL::to('aspects')}}">Aspectos Asociado</a></li>
  <li role="presentation"><a href="{{URL::to('requisites')}}">Requisitos Legales</a></li>
  <li role="presentation" class="active"><a href="{{URL::to('resumentable')}}">Ver Resumen</a></li>
  <li role="presentation" class="pull-right"><a href="{{URL::to('requisites/create')}}">Nuevo Requisito</a></li>
</ul>
@if (Session::has('message'))
<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                {{Session::get('message')}}
</div>
@endif

<h1>Resumen</h1>
<p>A continuacion se muestra el resumen de acuerdo a los aspectos asociados que cumplen o no cumplen en la empresa:</p>
<table class="table table-striped table-bordered text-center">
    <thead>
        <tr>
            <th rowspan="2" class="text-center">Aspectos Asociado</th>
            <th colspan="7" class="text-center">Aplicacion</th>
            <th colspan="6" class="text-center">Cumplimiento</th>
        </tr>
        <tr>
            <th class="text-center">Si</th>
            <th class="text-center">No</th>
            <th class="text-center">A Terceros</th>
            <th class="text-center">Autoridades Ambientales</th>
            <th class="text-center">Gestores Ambientales</th>
            <th class="text-center">Solo Informativa</th>
            <th class="text-center">Proveedores</th>
            
            <th class="text-center">Si</th>
            <th class="text-center">No</th>
            <th class="text-center">No Aplica</th>
            <th class="text-center">Parcialmente</th>
            <th class="text-center">En Implementacion</th>
            <th class="text-center">A Requerirse</th>
        </tr>
        </thead>
        <tbody>
        <?php $indice = 0?>
        @foreach($aspects as $aspect)
        <tr>
            <td>{{$aspect->name}}</td>
            <td>{{$applicationMatriz[$indice]["Si"]}}</td>
            <td>{{$applicationMatriz[$indice]["No"]}}</td>
            <td>{{$applicationMatriz[$indice]["A Terceros"]}}</td>
            <td>{{$applicationMatriz[$indice]["Autoridades Ambientales"]}}</td>
            <td>{{$applicationMatriz[$indice]["Gestores Ambientales"]}}</td>
            <td>{{$applicationMatriz[$indice]["Solo Informativa"]}}</td>
            <td>{{$applicationMatriz[$indice]["Proveedores"]}}</td>
            
            <td>{{$complianceMatriz[$indice]["Si"]}}</td>
            <td>{{$complianceMatriz[$indice]["No"]}}</td>
            <td>{{$complianceMatriz[$indice]["No Aplica"]}}</td>
            <td>{{$complianceMatriz[$indice]["Parcialmente"]}}</td>
            <td>{{$complianceMatriz[$indice]["En Implementacion"]}}</td>
            <td>{{$complianceMatriz[$indice]["A Requerirse"]}}</td>
        </tr>
        <?php $indice++?>
        @endforeach
    </tbody>
</table>
<!--
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/data.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable">
	<thead>
		<tr>
			<th></th>
			<th>Jane</th>
			<th>John</th>
                        <th>Fredy</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Apples</th>
			<td>3</td>
			<td>4</td>
                        <td>21</td>
                        
		</tr>
                <tr>
			<th>Apples</th>
			<td>3</td>
			<td>4</td>
                        <td>21</td>
		</tr>
		<tr>
			<th>Pears</th>
			<td>2</td>
			<td>0</td>
                        <td>21</td>
		</tr>
		<tr>
			<th>Plums</th>
			<td>5</td>
			<td>11</td>
                        <td>21</td>
		</tr>
		<tr>
			<th>Bananas</th>
			<td>1</td>
			<td>1</td>
                        <td>21</td>
		</tr>
		<tr>
			<th>Oranges</th>
			<td>2</td>
			<td>4</td>
                        <td>21</td>
		</tr>
	</tbody>
</table>

<script>
    $(function () {
    $('#container').highcharts({
        data: {
            table: document.getElementById('datatable')
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Resumen'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Unidades'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});
</script>
-->

@stop