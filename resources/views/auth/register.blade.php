<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Encuestas PC | Registro de Usuarios</title>
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
    <body class="hold-transition dark-mode register-page">
        <div class="register-box">
            <div class="card card-outline card-success">
                <div class="card-header text-center">
                    <h2>Encuestas <b>Registro</b></h2>
                </div>
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Registro de Usuarios</p>
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}"
                                    placeholder="Correo electrónico">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> {{$message}} </strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{old('username')}}"
                                    placeholder="Nombre de usuario (sin espacios)">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> {{$message}} </strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> {{$message}} </strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                            </div>
                        </form>
                        <a href="{{route('login')}}" class="text-center">Ya estoy registrado</a>
                    </div>
                    <!-- /.form-box -->
                </div><!-- /.card -->
            </div>
            <!-- /.register-box -->
        <!-- jQuery -->
        <script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ URL::asset('js/adminlte.min.js')}}"></script>
    </body>
</html>
