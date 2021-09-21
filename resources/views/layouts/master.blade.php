<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Encuestas PC Chiapas</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{URL::asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{URL::asset('plugins/toastr/toastr.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('css/adminlte.min.css')}}">
    @yield('css')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layouts.navbar')
        @include('layouts.sidebar')
        <!-- PRINCIPAL -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{$titulo}}</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('principal')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Secretaría de Proteccion Civil. </strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Unidad de Informática</b>
            </div>
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{URL::asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{URL::asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- Toastr-->
    <script src="{{URL::asset('plugins/toastr/toastr.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{URL::asset('js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{URL::asset('js/demo.js')}}"></script>
    <!--Validar formularios modales-->
    <script type="text/javascript" src="{{URL::asset('js/laravel-bootstrap-modal-form.js')}}"></script>
    <script type="text/javascript">
        $(function() {
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
        });

        function Solicitud_POST(URL, params, todo) {    //Funcion principal
            $.ajax({
                url: URL,
                type: 'POST',
                data: params,
                cache: false,
                success: function (resp) {
                    if (todo != null)
                        todo(resp);
                }
                ,error: function (resp) {
                    console.log(resp);
                }
            });
        }

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        @if (Session::has('success'))
            toastr.success("{{Session::get('success')}}");
        @endif
        @if (Session::has('warning'))
            toastr.warning("{{Session::get('warning')}}");
        @endif
        @if (Session::has('error'))
            toastr.error("{{Session::get('error')}}");
        @endif
        @if (Session::has('info'))
            toastr.info("{{Session::get('info')}}");
        @endif
    </script>
    @yield('js')
</body>
</html>
