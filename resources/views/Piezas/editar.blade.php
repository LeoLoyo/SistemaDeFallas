@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Editar pieza : {{ $pieza->descripcion }}</div>
       <div class="panel-body">
       @include('tools.errors')   

           {!! Form::model($pieza,['route'=>['piezas.update',$pieza],'method'=>'PUT']) !!}

                <div class="col-md-12">

                   <div class="form-group">
                       <span>Codigo: </span>
                       {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                   </div> 
                   <div class="form-group">
                       <span>Descripcion: </span>
                       {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                   </div>
                   <div class="form-group">
                       <span>Cantidad: </span>
                       {!! Form::text('cantidad',null,['class'=>'form-control']) !!}
                   </div> 
                   <div class="form-group">
                        <span>Grupo: </span>                    
                        <input type="text" disabled value="{{$pieza->grupo->descripcion}}" class="form-control">
                   </div>      
               </div>

           @include('tools.botones-actualizar')
           {!! Form::close() !!}

       </div>
    </div>
</div>
@endsection