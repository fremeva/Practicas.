<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
    Mi Perfil
@stop

@section('content')
<h3>Mi Perfil.</h3>
<div class="row">
            <div class="col-md-6 col-md-offset-3">
                <!-- Table -->
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th>User Name</th>
                        <td>{{$user->username}}</td>
                    </tr>
                    <tr>
                        <th>Correo electronico</th>
                        <td>{{$user->email}}</td>
                    </tr>
                </table>
            </div>
        </div>
@stop
