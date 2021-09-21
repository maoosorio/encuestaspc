@extends('layouts.master')
@section('principal')
<div class="card">
    <div class="card-header">
        Ingrese los datos del Encuestador
    </div>
    {!! Form::open(['route' => 'guardarEncuestador', 'role' => 'form', 'novalidate'=>'novalidate']) !!}
    <div class="card-body">
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre del Encuestador') !!}
            <input class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre"
                type="text" placeholder="Escriba el nombre del Encuestador" value="{{old('nombre')}}">
            {!!
                $errors->first('nombre', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>')
            !!}
             {!! Form::label('paterno', 'Apellido Paterno del Encuestador') !!}
             <input class="form-control @error('paterno') is-invalid @enderror" id="paterno" name="paterno"
                 type="text" placeholder="Escriba el apellido paterno del encuestador" value="{{old('paterno')}}">
             {!!
                 $errors->first('paterno', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>')
             !!}
              {!! Form::label('materno', 'Apellido Materno del Encuestador') !!}
              <input class="form-control @error('materno') is-invalid @enderror" id="materno" name="materno"
                  type="text" placeholder="Escriba el apellido materno del encuestador" value="{{old('materno')}}">
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
