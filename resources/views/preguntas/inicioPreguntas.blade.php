@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('principal')
<a href="{{route('agregarPregunta')}}" class="btn btn-success mb-3">Agregar Pregunta</a>
<table id="tblPreguntas" class="table table-dark table-striped table-hover">
    <thead>
        <tr>
        <th class="th-lg"><p class="font-weight-normal font-italic">Lista de Preguntas</p></th>
        <th class="th-sm"></th>
        </tr>
    </thead>
    <tbody>
        @if(empty($listaPreguntas) == false)
            @foreach ($listaPreguntas as $fila)
            <tr>
                <td>
                    <p class="text-sm-left font-weight-bold h6">{{$fila->descripcion}}</p>
                    <p class="text-sm-left font-italic h6">Categoria: {{$fila->categoria}} </p>
                    <p class="text-sm-left font-italic h6">Tipo de Respuesta: {{$fila->tiporesp}}</p>
                    <p class="text-sm-right text-muted">Creada por: {{$fila->crea_usuario}} | Fecha Creación: {{$fila->created_at}} | Fecha Mod: {{$fila->updated_at}}</p>
                </td>
                <td>
                    <a href="#" class="btn btn-success btn-sm" data-toggle="tooltip" title="Asignar Preguntas">
                        <i class="fas fa-file-medical"></i>
                    </a>
                    <a href="#" class="btn btn-success btn-sm" data-toggle="tooltip" title="Asignar Preguntas">
                        <i class="fas fa-file-medical"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
@endsection
@section('js')
    <script src="{{URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function() {
            $('#tblPreguntas').DataTable({
                "pagingType": "full",
                "lengthMenu": [[5, 10, -1], ["5", "10", "Todos"]],
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "language": {
                    "processing": "Procesando...",
                    "lengthMenu": "Mostrar  _MENU_  registros",
                    "zeroRecords": "No se encontraron resultados",
                    "emptyTable": "Ningún dato disponible en esta tabla =(",
                    "info": "Mostrando [_END_ / _TOTAL_]",
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(Total de registros: _MAX_)",
                    "infoPostFix": "",
                    "search": "Buscar:",
                    "url": "",
                    "decimal": ".",
                    "thousands":  ",",
                    "loadingRecords": "Cargando...",
                    "paginate": {
                        "first": "<i class='fas fa-angle-double-left'></i>",
                        "last": "<i class='fas fa-angle-double-right'></i>",
                        "next": "<i class='fas fa-angle-right'></i>",
                        "previous": "<i class='fas fa-angle-left'></i>"
                    }
                }
            });

            $('#agregarRespuestaModal').on('show.bs.modal', function(e) {
                $(this).find('#frmAgregarRespuesta')[0].reset();
            });

            $('#agregarRespuestaModal').on('hidden.bs.modal', function(e) {
                $(this).find('#frmAgregarRespuesta')[0].reset();
                $('#frmAgregarRespuesta small').remove(".text.muted", ".text-danger");
            });

            $('#borrarEncuestaModal').on('show.bs.modal', function(e) {
                var btn = $(e.relatedTarget);
                $('#borrarEncuestaModal #id_encuesta').attr('value', btn.data('idencuesta'));
                $('#borrarEncuestaModal #nom_encuesta').text(btn.data('nomencuesta'));
                $('#borrarEncuestaModal #creado_por').text(btn.data('creadopor'));
                $('#borrarEncuestaModal #fecha_creado').text(btn.data('fechacreado'));
            });
        });
    </script>
@endsection
