@extends('layouts.master')
@section('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{URL::asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/select2-adminlte.min.css')}}">
@endsection
@section('principal')
<div class="card">
    <div class="card-header">
        Ingrese el nuevo ajuste
    </div>
    {!! Form::open(['route' => 'guardarAjuste', 'role' => 'form', 'novalidate'=>'novalidate']) !!}
    <div class="card-body">
        <div class="row">
            <div class="col-6 form-group">
                {!! Form::label('listadoSeleccion', 'Elige un detalle para el ajuste') !!}
                <select name="listadoSeleccion" id="listadoSeleccion" class="form-control select2bs4 @error('listadoSeleccion') is-invalid @enderror">
                    <option value="0" disabled="disabled" selected="selected">Seleccione una opción...</option>
                    @foreach ($listaCategorias as $fila)
                        <option value="{{$fila->id_listadoSeleccion}}" {{old('listadoSeleccion') == $fila->id_listadoSeleccion ? 'selected=selected':''}}>
                            {{$fila->descripcion}}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('listadoSeleccion', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                {!! Form::label('descripcion', 'Descripción') !!}
                <textarea rows="2" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion"
                    type="text" placeholder="Escriba la descripción del ajuste">{{old('descripcion')}}</textarea>
                {!!
                    $errors->first('descripcion', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>')
                !!}
            </div>
        </div>
    </div>
    <div class="card-footer ">
        {!! Form::submit('Guardar Ajuste', ['class' => 'btn btn-primary float-right']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
@section('js')
    <!-- Select2 -->
    <script src="{{URL::asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2({
                theme: "dark-adminlte"
            });
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
        });
    </script>
@endsection
