@extends('layout.administrator.layout')

@section('title', 'Listado del Portafolio | TIC Educativa')

@section('styles')
    
@endsection

@section('scripts')

@endsection

@section('content_header')

	<h1>
		Portafolio
		<small>Listado del Portafolio</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="">CV</li>
		<li class="active">Portafolio</li>
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
                    <h3 class="box-title">Portafolio</h3>
					<a href="{{ route('administrator.portafolio.create') }}" class="btn btn-primary btn-sm pull-right">Nueva Evidencia</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 20px">Id</th>
								<th>Imágen</th>
                                <th>URL</th>
								<th style="width: 30px"></th>
								<th style="width: 30px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($portafolio as $evidencia)
                                <tr>
                                    <td>{{$evidencia->id}}</td>
                                    <td><img src="{{$evidencia->imagen}}" alt="icono" style="width:50px"></td>
									<td>{{$evidencia->url}}</td>
                                    <td>
                                        <a href="{{ route('administrator.portafolio.edit', $evidencia->id) }}" class="btn btn-block btn-warning btn-sm">Editar</a>
									</td>
									<td>
										<form action="{{ route('administrator.portafolio.destroy', $evidencia->id) }}" method="post">
											{{ csrf_field() }}
											{{ method_field('DELETE') }}
											<button type="submit" class="btn btn-block btn-danger btn-sm">Eliminar</button>
										</form>
									</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No hay información</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $portafolio->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
