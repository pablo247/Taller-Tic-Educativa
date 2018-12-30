@extends('layout.administrator.layout')

@section('title', 'Dashboard | TIC Educativa')

@section('account')

	<li class="dropdown user user-menu">
		<!-- Menu Toggle Button -->
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		<!-- The user image in the navbar-->
		<img src="{{ Path_Images::path_images_users() }}{{ Auth::user()->foto_perfil }}" class="user-image" alt="User Image">
		<!-- hidden-xs hides the username on small devices so only the image appears. -->
        <span class="hidden-xs">{{ Auth::user()->nombre }}</span>
		</a>
		<ul class="dropdown-menu">
		<!-- The user image in the menu -->
		<li class="user-header">
			<img src="{{ Path_Images::path_images_users() }}{{ Auth::user()->foto_perfil }}" class="img-circle" alt="User Image">

			<p>
			{{ Auth::user()->nombre . ' ' . Auth::user()->apellido }}
            <small>Miembro desde {{ $member_since }}</small>
			</p>
		</li>
		<!-- Menu Footer-->
		<li class="user-footer">
			<div class="pull-left">
				<a href="#" class="btn btn-default btn-flat">Profile</a>
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

@endsection


@section('content_header')

	<h1>
		Dashboard
		<small>Panel de Control</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Dashboard</li>
	</ol>
	
@endsection

@section('content')
	
	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
			<h2 class="box-title">Publicaciones Recientes</h2>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
						title="Collapse">
				<i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			...
		</div>
		<!-- /.box-body -->
		{{-- <div class="box-footer">
			Footer
		</div> --}}
		<!-- /.box-footer-->
	</div>
	<!-- /.box -->

@endsection
