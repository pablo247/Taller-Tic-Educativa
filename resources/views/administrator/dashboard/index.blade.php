@extends('layout.administrator.layout')

@section('title', 'Dashboard | TIC Educativa')

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
