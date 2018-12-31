@extends('layout.administrator.layout')

@section('title', 'Lista de Usuarios | TIC Educativa')

@section('styles')
    
@endsection

@section('scripts')

@endsection

@section('content_header')

	<h1>
		Usuarios
		<small>Lista de Usuarios</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Usuarios</li>
	</ol>
	
@endsection

@section('content')

    
    @if (session('info'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('info') }}
          </div>
    @endif

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Usuarios</h3>
                    <a href="{{ route('usuario.create') }}" class="btn btn-primary btn-sm pull-right">Crear Usuario</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 20px">Id</th>
                                <th>Nombre</th>
                                <th>Correo Electrónico</th>
                                <th>Usuario</th>
                                <th>Rol</th>
                                <th style="width: 30px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->nombre}}</td>
                                    <td>{{$user->correo}}</td>
                                    <td>{{$user->usuario}}</td>
                                    <td>{{$user->rol}}</td>
                                    <td>
                                        <a href="{{ route('usuario.edit', $user->id) }}" class="btn btn-block btn-warning btn-sm">Editar</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No hay información</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $users->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
