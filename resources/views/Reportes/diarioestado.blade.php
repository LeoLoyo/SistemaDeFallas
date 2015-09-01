@extends('app')
@include('tools.sidebar')
@section('content')
<div class="panel panel-danger">
	<div class="panel-heading">Reporte Mantenimiento Diario - Estado Fisico de las Unidades</div>
    {!! Form::open(['route'=>'rdiario4.store','method'=>'POST']) !!}
    <div class="panel-body ">
        <div class="col-md-10 col-md-offset-1">
                <div class="col-md-12">
             @include('tools.fecha')
        </div>
        <div class="col-md-2 col-md-offset-5">
            <button id="registrar"type="submit" class="btn btn-success glyphicon glyphicon-stats">  Generar</button>
        </div>
        {!! Form::close() !!}
        <div class="col-md-9 col-md-offset-1">@include('Mantenimiento_Diario.diarios')</div>
    </div>
    </div>
</div>		
@endsection