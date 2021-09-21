<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Encuestas PC | Iniciar Sesion</title>
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
    <body class="hold-transition dark-mode login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <h2>Encuestas <b>Login</b></h2>
                </div>
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Iniciar sesión</p>
                    <form action="{{route('login')}}" method="post">
                        {{ csrf_field() }}
                        <div class="input-group mb-3">
                            <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{old('username')}}"
                                required autocomplete="username" placeholder="Nombre de Usuario" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @if(Session::has('error'))
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{Session::get('error')}} </strong>
                                </span>
                            @endif
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{$message}} </strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required placeholder="Contraseña">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                            </div>
                        </div>
                    </form>
                    <p class="mb-0">
                        <a href="{{route('register')}}" class="text-center">Registrar nuevo usuario</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ URL::asset('js/adminlte.min.js')}}"></script>
    </body>
</html>
