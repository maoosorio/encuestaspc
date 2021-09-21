@extends('layouts.master')
@section('principal')
<div class="card">
    <div class="card-header">
        Editar Ajuste
    </div>
    {!! Form::open(['route' => 'modificarAjuste', 'role' => 'form', 'novalidate'=>'novalidate']) !!}
    <div class="card-body">
        <div class="form-group">
            {!! Form::hidden('id_listSelDetalle', $datos->id_listSelDetalle) !!}
            {!! Form::label('listadoSeleccion', 'Detalle del Ajuste') !!}
            <select name="listadoSeleccion" id="listadoSeleccion" class="form-control select2bs4 @error('listadoSeleccion') is-invalid @enderror">
                @foreach ($listaCategorias as $fila)
                    <option value="{{$fila->id_listadoSeleccion}}" {{$datos->id_listadoSeleccion == $fila->id_listadoSeleccion ? 'selected=selected':''}}>
                        {{$fila->descripcion}}
                    </option>
                @endforeach
            </select>
            {!!
                $errors->first('listadoSeleccion', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>')
            !!}
            {!! Form::label('descripcion', 'Descripción') !!}
            <input class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion"
                type="text" placeholder="Descripción del Ajuste" value="{{$datos->descripcion}}">
            {!!
                $errors->first('descripcion', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>')
            !!}
        </div>
    </div>
    <div class="card-footer">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
