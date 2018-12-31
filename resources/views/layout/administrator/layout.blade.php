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
    <a href="index2.html" class="logo">
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
          @yield('account')
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
