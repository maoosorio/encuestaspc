@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('principal')
@include('ajustes.borrarAjusteModal')
<a href="{{route('agregarAjuste')}}" class="btn btn-success mb-3">Agregar Ajuste</a>
<table id="tblAjustes" class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            <th class="th-sm">Ajuste</th>
            <th class="th-lg">Descripcion</th>
            <th class="th-sm">Creado por</th>
            <th class="th-sm">Modificado por</th>
            <th class="th-sm">Fecha Creación</th>
            <th class="th-sm">Fecha Modificacion</th>
            <th class="th-lg">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @if(empty($listaAjustes) == false)
            @foreach ($listaAjustes as $fila)
                <tr>
                    <td>{{$fila->ajuste}}</td>
                    <td>{{$fila->descripcion}}</td>
                    <td>{{$fila->crea_usuario}}</td>
                    <td>{{$fila->mod_usuario}}</td>
                    <td>{{$fila->created_at}}</td>
                    <td>{{$fila->updated_at}}</td>
                    <td>
                        <a href="{{route('editarAjuste', ['idAjuste' => $fila->id_listSelDetalle])}}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#borrarAjusteModal"
                            data-idajuste="{{$fila->id_listSelDetalle}}" data-nomajuste="{{$fila->descripcion}}" data-ajustep="{{$fila->ajuste}}" data-creadopor="{{$fila->crea_usuario}}" data-fechacreado="{{$fila->created_at}}">
                            <i class="fas fa-trash"></i>
                        </button>
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
            $('#tblAjustes').DataTable({
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

            $('#borrarAjusteModal').on('show.bs.modal', function(e) {
                var btn = $(e.relatedTarget);
                $('#borrarAjusteModal #id_listSelDetalle').attr('value', btn.data('idajuste'));
                $('#borrarAjusteModal #nom_Ajuste').text(btn.data('nomajuste'));
                $('#borrarAjusteModal #ajuste').text(btn.data('ajustep'));
                $('#borrarAjusteModal #creado_por').text(btn.data('creadopor'));
                $('#borrarAjusteModal #fecha_creado').text(btn.data('fechacreado'));
            });
        });
    </script>
@endsection
