@extends('layouts.master')
@section('principal')
<div class="card">
    <div class="card-header">
        Ingrese el nombre del Encuestador
    </div>
    {!! Form::open(['route' => 'modificarEncuestador', 'role' => 'form', 'novalidate'=>'novalidate']) !!}
    <div class="card-body">
        <div class="form-group">
            {!! Form::hidden('id_encuestador', $datos->id_encuestador) !!}
            {!! Form::label('nombre', 'Nombre (s)') !!}
            <input class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre"
                type="text" placeholder="Escriba el nombre del encuestador" value="{{$datos->nombre}}">
            {!!
                $errors->first('nombre', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>')
            !!}
            {!! Form::label('paterno', 'Apellido Paterno') !!}
            <input class="form-control @error('paterno') is-invalid @enderror" id="paterno" name="paterno"
                type="text" placeholder="Escriba apellido paterno del encuestador" value="{{$datos->paterno}}">
            {!!
                $errors->first('paterno', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>')
            !!}
            {!! Form::label('materno', 'Apellido Materno') !!}
            <input class="form-control @error('materno') is-invalid @enderror" id="materno" name="materno"
                type="text" placeholder="Escriba el apellido materno del encuestador" value="{{$datos->materno}}">
            {!!
                $errors->first('materno', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>')
            !!}
        </div>
    </div>
    <div class="card-footer">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
