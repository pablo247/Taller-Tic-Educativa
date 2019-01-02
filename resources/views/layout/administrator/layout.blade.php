<!DOCTYPE html>

<html>
<head>
  @include('layout.administrator.blocks.metas')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('dashboard') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TIC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TIC </b>Educativa</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="{{ Auth::user()->foto_perfil }}" class="user-image" alt="User Image">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">{{ Auth::user()->nombre }}</span>
            </a>
            <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <img src="{{ Auth::user()->foto_perfil }}" class="img-circle" alt="User Image">
        
              <p>
              {{ Auth::user()->nombre . ' ' . Auth::user()->apellido }}
                    <small>Miembro desde {{ Auth::user()->created_at->format('M, Y') }}</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{ route('usuario.edit', Auth::user()->id) }}" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
        
                <a href="{{ route('logout') }}"
                  class="btn btn-default btn-flat"
                  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                  Cerrar Sesión
                </a>
        
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
        
              </div>
            </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Ménu</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ (Route::current()->getName() == 'dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="{{ (Route::current()->getName() == '#') ? 'active' : '' }}"><a href="#"><i class="fa fa-file"></i> <span>Artículos</span></a></li>
        <li class="{{ (Route::current()->getName() == '#') ? 'active' : '' }}"><a href="#"><i class="fa fa-vcard"></i> <span>CV</span></a></li>
        @if (Auth::user()->rol == 'super usuario')
          <li class="{{ (Route::current()->getName() == 'usuario.index') ? 'active' : '' }}"><a href="{{ route('usuario.index') }}"><i class="fa fa-user"></i> <span>Usuarios</span></a></li>
        @endif
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('content_header')
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

@include('layout.administrator.blocks.scripts')

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
