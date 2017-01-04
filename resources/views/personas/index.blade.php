@extends('layouts/master')

@section('header')
<h2>Lista de personas</h2>
@endsection

@section('content')
<a href="personas/create" class="btn btn-primary">Nueva persona</a>
<table class="table table-bordered table-responsive" style="margin-top: 10px;">
    <thead>
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>dni</th>
        <th>edad</th>
    </tr>
    </thead>
        <tbody>
        @foreach($personas as $persona)
            <tr>
                <td>{{$persona->id}}</td>
                <td>{{ $persona->nombre}}</td>
                <td>{{ $persona->dni}}</td>
                <td>{{ $persona->edad}}</td>
                <td> <a href="" class="btn btn-success">Editar</a>
                     <a href="" class="btn btn-danger">Eliminar</a>
                </td>   

            </tr>
         @endforeach
        </tbody>
 </table>
@endsection