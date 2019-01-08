@extends('layout.administrator.layout')

@section('title', 'Listado de Conocimientos | TIC Educativa')

@section('styles')
    
@endsection

@section('scripts')

@endsection

@section('content_header')

	<h1>
		Conocimientos
		<small>Listado de Conocimientos</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="">CV</li>
		<li class="active">Conocimientos</li>
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
                    <h3 class="box-title">Conocimientos</h3>
					<a href="{{ route('administrator.conocimiento.create') }}" class="btn btn-primary btn-sm pull-right">Nuevo Conocimeinto</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 20px">Id</th>
								<th>Título</th>
                                <th>Icono</th>
								<th style="width: 30px"></th>
								<th style="width: 30px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($conocimientos as $conocimiento)
                                <tr>
                                    <td>{{$conocimiento->id}}</td>
									<td>{{$conocimiento->titulo}}</td>
                                    <td><img src="{{asset($conocimiento->icono)}}" alt="icono" style="width:50px"></td>
                                    <td>
                                        <a href="{{ route('administrator.conocimiento.edit', $conocimiento->id) }}" class="btn btn-block btn-warning btn-sm">Editar</a>
									</td>
									<td>
										<form action="{{ route('administrator.conocimiento.destroy', $conocimiento->id) }}" method="post">
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
                    {{ $conocimientos->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
