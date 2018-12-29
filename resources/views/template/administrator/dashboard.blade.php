@extends('layout.administrator.layout')

@section('title', 'Dashboard | TIC Educativa')

@section('account')

	<li class="dropdown user user-menu">
		<!-- Menu Toggle Button -->
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		<!-- The user image in the navbar-->
		<img src="/images/site/administrator/default-avatar-160.png" class="user-image" alt="User Image">
		<!-- hidden-xs hides the username on small devices so only the image appears. -->
		<span class="hidden-xs">Alexander Pierce</span>
		</a>
		<ul class="dropdown-menu">
		<!-- The user image in the menu -->
		<li class="user-header">
			<img src="/images/site/administrator/default-avatar-160.png" class="img-circle" alt="User Image">

			<p>
			Alexander Pierce - Web Developer
			<small>Miembro desde Nov. 2012</small>
			</p>
		</li>
		{{-- <!-- Menu Body -->
		<li class="user-body">
			<div class="row">
			<div class="col-xs-4 text-center">
				<a href="#">Followers</a>
			</div>
			<div class="col-xs-4 text-center">
				<a href="#">Sales</a>	
			</div>
			<div class="col-xs-4 text-center">
				<a href="#">Friends</a>
			</div>
			</div>
			<!-- /.row -->
		</li> --}}
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
		Page Header
		<small>Optional description</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
		<li class="active">Here</li>
	</ol>
	
@endsection

@section('content')

@endsection
