<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Mantenimiento Informatico | Usuario inactivo</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{URL::asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{URL::asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{URL::asset('css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition register-page">
        <div class="wrapper">
            <section class="content">
                <div class="error-page">
                    <h2 class="headline text-danger">500</h2>
                    <div class="error-content">
                        <h3><i class="fas fa-exclamation-triangle text-danger"></i> Usuario inactivo.</h3>

                        <p>
                            Por favor notifique al administrador del sistema.
                            <br>
                            <a href="{{route('login')}}">Regresar </a>
                        </p>
                    </div>
                </div>
                <!-- /.error-page -->
            </section>
            <!-- /.content -->
        </div>
        <!-- jQuery -->
        <script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ URL::asset('js/adminlte.min.js')}}"></script>
    </body>
</html>
