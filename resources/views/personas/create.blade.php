@extends('layouts/master')

@section('header')
<h2>Agregar persona</h2>
@endsection

@section('content')

{!! Form::open(['action'=>'PersonaController@store', 'class'=>"form-horizontal"])!!}
    <div class="form-group">
       {!! Form::label('nombre,','Nombre', ['class'=>'control-label col-md-2']) !!}
       
            <div class="col-md-10">
                  {!! Form::text('nombre', null, ['class'=>'form-control']) !!}
                  {!! $errors->has('nombre')?$errors->first('nombre'):'' !!}
            </div>
       
    </div>
     <div class="form-group">
        {!! Form::label('dni','DNI', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                  {!! Form::text('dni',null, ['class'=>'form-control']) !!} 
                  {!! $errors->has('dni')?$errors->first('dni'):'' !!} 
            </div>
    </div>
     <div class="form-group">
         {!! Form::label('edad','Edad', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                  {!! Form::text('edad',null, ['class'=>'form-control']) !!}
                  {!! $errors->has('edad')?$errors->first('edad'):'' !!}  
            </div>
    </div>
    <div class="form-group">
       <div class="col-md-offset-2 col-md-10">
                  {!! Form::submit('GRABAR', ['class'=>'btn btn-primary']) !!}
       </div>
    </div>

{!! Form::close() !!}
@endsection