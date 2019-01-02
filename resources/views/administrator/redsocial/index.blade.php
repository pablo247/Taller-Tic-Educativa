@extends('layout.administrator.layout')

@section('title', 'Listado de Redes Sociales | TIC Educativa')

@section('styles')
    
@endsection

@section('scripts')

@endsection

@section('content_header')

	<h1>
		Redes Sociales
		<small>Listado de Redes Sociales</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="">CV</li>
		<li class="active">Redes Socialales</li>
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
                    <h3 class="box-title">Redes Sociales</h3>
                    <a href="{{ route('administrator.redsocial.create') }}" class="btn btn-primary btn-sm pull-right">Crear Red Social</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 20px">Id</th>
                                <th>Titulo</th>
                                <th>Icono</th>
                                <th style="width: 30px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($redessociales as $redsocial)
                                <tr>
                                    <td>{{$redsocial->id}}</td>
                                    <td>{{$redsocial->titulo}}</td>
                                    <td><img src="{{$redsocial->icono}}" alt="icono"></td>
                                    <td>
                                        <a href="{{ route('administrator.redsocial.edit', $redsocial->id) }}" class="btn btn-block btn-warning btn-sm">Editar</a>
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
                    {{ $redessociales->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
