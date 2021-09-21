<div class="modal fade" id="borrarEncuestaModal" tabindex="-1" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="tituloModal">Borrar Encuesta</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['route' => 'borrarEncuesta', 'role' => 'form', 'novalidate'=>'novalidate']) !!}
            <div class="modal-body">
                {!! Form::hidden('id_encuesta', '', ['id'=>'id_encuesta']) !!}
                <p>Los datos de la siguiente encuesta serán eliminados, ¿desea continuar?</p>
                <p>Nombre de la Encuesta: <strong><span id="nom_encuesta"></span></strong></p>
                <p>Creado por: <strong><span id="creado_por"></span></strong></p>
                <p>Fecha creación: <strong><span id="fecha_creado"></span></strong></p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                {!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
