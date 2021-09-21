<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('inicio')}}" class="brand-link">
        <img src="{{URL::asset('img/logo-spc.png')}}" width="180" height="80" alt="Secretaría de Protección Civil" style="opacity: .8">
        <span></span>
    </a>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('encuestas')}}" class="nav-link {{Request::is('encuestas') ? 'active' : ''}}">
                    <i class="nav-icon far fa-clipboard"></i>
                    <p>Encuestas</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('preguntas')}}" class="nav-link {{Request::is('preguntas') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-clipboard-list"></i>
                    <p> Preguntas </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('encuestadores')}}" class="nav-link {{Request::is('encuestadores') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-vest"></i>
                    <p> Encuestadores </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('ajustes')}}" class="nav-link {{Request::is('ajustes') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p> Ajustes </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p> Cerrar Sesión </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
</aside>
