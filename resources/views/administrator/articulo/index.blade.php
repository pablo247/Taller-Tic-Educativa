@extends('layout.administrator.layout')

@section('title', 'Listado de Artículos | TIC Educativa')

@section('styles')
    
@endsection

@section('scripts')

@endsection

@section('content_header')

	<h1>
		Artículos
		<small>Listado de Artículos</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Artículos</li>
	</ol>
	
@endsection

@section('content')

    
    @if (session('info'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('info') }}
          </div>
    @endif

    @if (session('warning'))
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('warning') }}
          </div>
    @endif

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Artículos</h3>
					<a href="{{ route('administrator.articulo.create') }}" class="btn btn-primary btn-sm pull-right">Nuevo Artículo</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 20px">Id</th>
								<th>Título</th>
								<th>Introducción</th>
								<th>Publicado</th>
								<th>Fecha de Publicaión</th>
								<th style="width: 30px"></th>
								<th style="width: 30px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($articulos as $articulo)
                                <tr>
                                    <td>{{$articulo->id}}</td>
									<td>{{$articulo->titulo}}</td>
									<td>{{$articulo->introduccion}}</td>
									<td>{{$articulo->publicado ? 'Si' : 'No'}}</td>
									<td>{{$articulo->fecha_publicacion}}</td>
                                    <td>
                                        <a href="{{ route('administrator.articulo.edit', $articulo->id) }}" class="btn btn-block btn-warning btn-sm">Editar</a>
									</td>
									<td>
										<form action="{{ route('administrator.articulo.destroy', $articulo->id) }}" method="post">
											{{ csrf_field() }}
											{{ method_field('DELETE') }}
											<button type="submit" class="btn btn-block btn-danger btn-sm">Eliminar</button>
										</form>
									</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">No hay información</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $articulos->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
