<div class="modal fade" id="agregarRespuestaModal" tabindex="-1" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="tituloModal">Agregar Respuesta</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['route'=>'agregarRespuesta', 'class'=>'bootstrap-modal-form', 'id'=>'frmAgregarRespuesta']) !!}
            <div class="modal-body">
                <div class="form-group">
                    {!! Form::label('texto_respuesta', 'Texto de la Respuesta') !!}
                    <input type="text" name="texto_respuesta" id="texto_respuesta" class="form-control @error('texto_respuesta') is-invalid @enderror"
                        placeholder="Escriba el texto de la respuesta" value=""{{old('texto_respuesta')}}>
                </div>
                <div class="form-group">
                    {!! Form::label('valor_respuesta', 'Valor de la Respuesta') !!}
                    <input type="text" name="valor_respuesta" id="valor_respuesta" class="form-control @error('valor_respuesta') is-invalid @enderror"
                        placeholder="Escriba el valor numérico de la respuesta" value="{{old('valor_respuesta')}}">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                {!! Form::submit('Agregar', ['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
