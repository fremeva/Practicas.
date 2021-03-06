<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Requisitos
@stop

@section('content')
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="{{URL::to('aspects')}}">Aspectos Asociado</a></li>
    <li role="presentation" class="active"><a href="{{URL::to('requisites')}}">Requisitos Legales</a></li>
    <li role="presentation"><a href="{{URL::to('resumentable')}}">Ver Resumen</a></li>
    <li role="presentation" class="pull-right"><a href="{{URL::to('requisites/create')}}">Nuevo Requisito</a></li>

</ul>
@if (Session::has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    {{Session::get('message')}}
</div>
@endif
<div class="col-xs-3 pull-right">
    {{Form::text('searchTerm',null,array('placeholder' => 'Buscar', 'class' => 'form-control', 'id'=>'searchTerm', 'onkeyup'=>'doSearch()', 'style'=>'margin-top: 4px'))}}
</div>
<h1>Requisitos Legales</h1>
<p>Los Requisitos legales del medio ambiente para la empresa:</p>

<table class="table" id="regTable">
    <thead>
        <tr>
            <th>Norma</th>
            <th>Numero</th>
            <th>Articulo</th>
            <th>Aspecto Asociado</th>
            <th>Acci&oacute;n</th>
        </tr>
    </thead>
    <tbody>
        @foreach($requisites as $requisite)
        <tr>
            <td>{{$requisite->norm}}</td>
            <td>{{$requisite->norm_number}}</td>
            <td>{{$requisite->article}}</td>
            <td>{{$requisite->aspect->name}}</td>
            <td>
                <a href="{{URL::to('requisites/'.$requisite->id)}}" type="button" class="btn btn-info" ><span class="glyphicon glyphicon-info-sign"></span> Detalle</a>
                @if(is_null($requisite->evaluation))
                <span 
                    class="glyphicon glyphicon-warning-sign alert-warning pull-right alertaRequisite"
                    data-toggle="tooltip" data-placement="right"
                    title="EL Requisito le Falta Su Evaluacion y Planeacion."
                    ></span>
                @elseif(is_null($requisite->evaluation->planning))
                <span 
                    class="glyphicon glyphicon-warning-sign alert-warning pull-right alertaRequisite"
                    data-toggle="tooltip" data-placement="right"
                    title="EL Requisito le Falta Su Planeacion."
                    ></span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script language="javascript">
    function doSearch() {
        var tableReg = document.getElementById('regTable');
        var searchText = document.getElementById('searchTerm').value.toLowerCase();
        for (var i = 1; i < tableReg.rows.length; i++) {
            var cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
            var found = false;
            for (var j = 0; j < cellsOfRow.length && !found; j++) {
                var compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1)) {
                    found = true;
                }
            }
            if (found) {
                tableReg.rows[i].style.display = '';
            } else {
                tableReg.rows[i].style.display = 'none';
            }
        }
    }

    $(function () {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>
@stop
