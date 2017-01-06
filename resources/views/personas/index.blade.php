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
        <th>Fecha Creacion</th>
        <th>Fecha Modificacion</th>
        <th colspan="2">Operaciones</th>
    </tr>
    </thead>
        <tbody>
        @foreach($personas as $persona)
            <tr>
                <td>{{ $persona->id}}</td>
                <td>{{ $persona->nombre}}</td>
                <td>{{ $persona->dni}}</td>
                <td>{{ $persona->edad}}</td>
                <td>{{ $persona->created_at}}</td>
                <td>{{ $persona->updated_at}}</td>
                <td>
                 <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-success">Editar</a>
                </td>   
                <td>
                 {!! Form::open(['method'=>'delete', 'route'=>['personas.destroy', $persona->id] ]) !!}
                 {!! Form::submit('Delete', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Desea borar este registro?")'] )!!}
                 {!! Form::close() !!}
                </td>

            </tr>
         @endforeach
        </tbody>
 </table>
@endsection