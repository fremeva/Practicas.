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
</ul><br />
@if (Session::has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    {{Session::get('message')}}
</div><br />
@endif

<ul class="nav nav-pills pull-right">
    <li role="presentation"><a href="{{URL::to('resumentable')}}"><i class="fa fa-table"></i> Tabla Completa</a></li>
    <li role="presentation"><a href="{{URL::to('resumenxaplicacion')}}"><i class="fa fa-bar-chart"></i> Detalle Aplicacion</a></li>
    <li role="presentation" class="active"><a href="{{URL::to('resumenxcumplimiento')}}"><i class="fa fa-bar-chart"></i> Detalle Cumplimiento</a></li>
</ul>

{{HTML::script('js/highcharts/highcharts.js')}}
{{HTML::script('js/highcharts/data.js')}}
{{HTML::script('js/highcharts/exporting.js')}}

<div id="container" style="min-width: 310px; max-width: 800px; height: 750px; margin: 0 auto"></div>
<br /><br /><br /><br />

<table id="datatable" class="table">
    <thead>
        <tr>
            <th></th>
            <th>Si</th>
            <th>No</th>
            <th>A Requerirse</th>
            <th>En Implementacion</th>
            <th>No Aplica</th>
            <th>Parcialmente</th>
        </tr>
    </thead>
    <tbody>
        <?php $indice = 0 ?>
        @foreach($aspects as $aspect)
        <tr>
            <th>{{$aspect->name}}</th>
            <td>{{$complianceMatriz[$indice]["Si"]}}</td>
            <td>{{$complianceMatriz[$indice]["No"]}}</td>
            <td>{{$complianceMatriz[$indice]["A Requerirse"]}}</td>
            <td>{{$complianceMatriz[$indice]["En Implementacion"]}}</td>
            <td>{{$complianceMatriz[$indice]["No Aplica"]}}</td>
            <td>{{$complianceMatriz[$indice]["Parcialmente"]}}</td>

        </tr>
        <?php $indice++ ?>
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
                text: 'Resumen Por Cumplimiento'
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
@stop