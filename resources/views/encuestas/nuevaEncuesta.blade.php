@extends('layouts.master')
@section('principal')
<div class="card">
    <div class="card-header">
        Ingrese el nombre de la Encuesta
    </div>
    {!! Form::open(['route' => 'guardarEncuesta', 'role' => 'form', 'novalidate'=>'novalidate']) !!}
    <div class="card-body">
        <div class="form-group">
            {!! Form::label('nombre_encuesta', 'Nombre de la Encuesta') !!}
            <input class="form-control @error('nombre_encuesta') is-invalid @enderror" id="nombre_encuesta" name="nombre_encuesta"
                type="text" placeholder="Escriba el nombre de la Encuesta" value="{{old('nombre_encuesta')}}">
            {!!
                $errors->first('nombre_encuesta', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>')
            !!}
        </div>
    </div>
    <div class="card-footer">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
