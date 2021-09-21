@extends('layouts.master')
@section('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{URL::asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/select2-adminlte.min.css')}}">
@endsection
@section('principal')
@include('preguntas.agregarRespuestaModal')
@include('preguntas.quitarRespuestaModal')
<div class="card">
    <div class="card-header">
        Ingrese el texto de la pregunta
    </div>
    {!! Form::open(['route' => 'guardarPregunta', 'role' => 'form', 'novalidate'=>'novalidate']) !!}
    <div class="card-body">
        <div class="row">
            <div class="col-6 form-group">
                {!! Form::label('categoria_pregunta', 'Elige una categoría de la pregunta') !!}
                <select name="categoria_pregunta" id="categoria_pregunta" class="form-control select2bs4 @error('categoria_pregunta') is-invalid @enderror">
                    <option value="0" disabled="disabled" selected="selected">Seleccione una opción...</option>
                    @foreach ($listaCategorias as $fila)
                        <option value="{{$fila->id_listSelDetalle}}" {{old('categoria_pregunta') == $fila->id_listSelDetalle ? 'selected=selected':''}}>
                            {{$fila->descripcion}}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('categoria_pregunta', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>') !!}
            </div>
            <div class="col-6 form-group">
                {!! Form::label('tipos_respuesta', 'Elige un tipo de respuesta') !!}
                <select name="tipos_respuesta" id="tipos_respuesta" class="form-control select2bs4 @error('tipos_respuesta') is-invalid @enderror">
                    <option value="0" disabled="disabled" selected="selected">Seleccione una opción...</option>
                    @foreach ($listaTiposResp as $fila)
                        <option value="{{$fila->id_listSelDetalle}}" {{old('tipos_respuesta') == $fila->id_listSelDetalle ? 'selected=selected':''}}>
                            {{$fila->descripcion}}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('tipos_respuesta', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                {!! Form::label('texto_pregunta', 'Texto de la pregunta') !!}
                <textarea rows="2" class="form-control @error('texto_pregunta') is-invalid @enderror" id="texto_pregunta" name="texto_pregunta"
                    type="text" placeholder="Escriba el texto de la pregunta">{{old('texto_pregunta')}}</textarea>
                {!!
                    $errors->first('texto_pregunta', '<span class="invalid-feedback" role="alert"><strong> :message </strong></span>')
                !!}
            </div>
        </div>
        <div class="row">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregarRespuestaModal">Agregar Respuesta</button>
            <table id="tblRespuestas" class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                    <th class="th-lg"><p class="font-weight-normal font-italic">Lista de Respuestas</p></th>
                    <th class="th-sm">Valor</th>
                    <th class="th-sm"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (Cart::getContent() as $fila)
                    <tr>
                        <td>{{$fila->name}}</td>
                        <td>{{$fila->quantity}}</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#quitarRespuestaModal"
                                data-idrespuesta="{{$fila->id}}" data-respuesta="{{$fila->name}}" data-valor="{{$fila->quantity}}">
                                <i class="fas fa-window-close"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer ">
        {!! Form::submit('Guardar Pregunta', ['class' => 'btn btn-primary float-right']) !!}
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

            $('#quitarRespuestaModal').on('show.bs.modal', function(e) {
                var btn = $(e.relatedTarget);
                $('#quitarRespuestaModal #id_respuesta').attr('value', btn.data('idrespuesta'));
                $('#quitarRespuestaModal #txt_respuesta').text(btn.data('respuesta'));
                $('#quitarRespuestaModal #val_respuesta').text(btn.data('valor'));
            });

            // var txtpreg = "";
            // $('#agregarRespuestaModal').on('hidden.bs.modal', function(e) {
            //     txtpreg = $('#texto_pregunta').val();
            //     console.log('***'+txtpreg);
            // });
            // console.log(txtpreg);
        });
    </script>
@endsection
