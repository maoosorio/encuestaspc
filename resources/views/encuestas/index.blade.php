@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('principal')
@include('encuestas.borrarEncuestaModal')
<a href="{{route('agregarEncuesta')}}" class="btn btn-success mb-3">Agregar Encuesta</a>
<table id="tblEncuestas" class="table table-dark table-striped table-bordered table-hover text-white" style="width:100%">
    <thead>
        <tr>
            <th class="th-lg">Nombre Encuesta</th>
            <th class="th-sm">Creada por</th>
            <th class="th-sm">Modificada por</th>
            <th class="th-sm">Fecha Creación</th>
            <th class="th-sm">Fecha Modificacion</th>
            <th class="th-lg">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @if(empty($listaEncuestas) == false)
            @foreach ($listaEncuestas as $fila)
                <tr>
                    <td>{{$fila->descripcion}}</td>
                    <td>{{$fila->crea_usuario}}</td>
                    <td>{{$fila->mod_usuario}}</td>
                    <td>{{$fila->created_at}}</td>
                    <td>{{$fila->updated_at}}</td>
                    <td>
                        <a href="{{route('editarEncuesta', ['idEncuesta' => $fila->id_encuesta])}}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#borrarEncuestaModal"
                            data-idencuesta="{{$fila->id_encuesta}}" data-nomencuesta="{{$fila->descripcion}}"
                            data-creadopor="{{$fila->crea_usuario}}" data-fechacreado="{{$fila->created_at}}">
                            <i class="fas fa-trash"></i>
                        </button>
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
            $('#tblEncuestas').DataTable({
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
