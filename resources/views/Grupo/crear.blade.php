@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Grupo </div>
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'grupos.store','method'=>'POST']) !!}

            	<div class="col-md-12">
            		
                        <div class="form-group">
                                <span>Seccion(Sistema): </span>
                                <select name="seccion_id" class="form-control">
                                      @foreach($secciones as $seccion)
                                      <option value="{{ $seccion->id }}">{{ $seccion->descripcion }}</option>    
                                      @endforeach
                                </select>
                        </div>
                         <div class="form-group">
                                <span>Código: </span>
                                {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                                <span>Descripción: </span>
                                {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                        </div>
					@include('tools.botones-registrar')
            	</div>
            	<div class="col-md-12">
            		<table class="table table-bordered table-striped">
            			<tr>
            				<th>ID</th>
            				<th>Código</th>
                            <th>Descripción</th>
                            <th>Sección</th>
            				<th>Acción</th>
            			</tr>
            			@foreach($grupos as $grupo)
            			<tr>            				
                            <td>{{ $grupo->id }}</td>
            				<td>{{ $grupo->codigo }}</td>
                            <td>{{ $grupo->descripcion }}</td>
            				<td>{{ $grupo->seccion->descripcion }}</td>
            				<td>
            					<a href="{{ route('grupos.edit',$grupo) }}" class="btn btn-info">Modificar</a>

            				</td>            				
            			</tr>
            			@endforeach
            		</table>
            		{!! $grupos->render() !!}
            	</div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
@endsection