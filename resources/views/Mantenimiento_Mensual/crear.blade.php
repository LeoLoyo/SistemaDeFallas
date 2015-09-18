@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Mantenimiento Mensual Preventivo</div>
        <div class="panel-body">
		  @include('tools.errors')
          {!! Form::open(['route'=>'mensual.store','method'=>'POST']) !!}
    		<div class="row">
				<div class="row">
                	<div class="col-md-4 col-md-offset-1">
                    	<div class="form-group row">
                        	<div class="col-md-4"><span>Fecha:</span></div>
                        	<div class="col-md-7">
                        		<input type="date" disabled value="<?php echo date("Y-m-d");?>" class="form-control">
                        		<input type="text" name="usuario_id" class="hidden" value="{{ Auth::user()->id }}">
                                <input class="hidden" type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control">
                        	</div>
                    	</div>
                	</div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="form-group row">
                        <div class="col-md-3"><span>Unidad:</span></div>
                        <div class="col-md-9">   
                            <select name="unidad_id" id="unidad" class="form-control">
                                @foreach($unidades as $unidad)
                                    <option value="{{ $unidad->id }}">{{$unidad->nidentificacion}}</option>    
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            	</div>
			</div>

			<div class="row">
            	<div class="col-md-12">
                	<div class="panel panel-danger">
                	<div class="panel-heading">Parametros a Revisar</div>
                    <div class="panel-body">
                	    <div class="form-group row">
                      		<div class="col-md-8 col-md-offset-1"><span>Chequeo del nivel del liquido de las Baterias.</span><strong>  ¿Nivel Adecuado?</strong></div>
                        	<div class="col-md-2">
                            	<select name="liquidobat" id="liquidobat" class="form-control">
                                	<option value="Si">Si</option>
                                	<option value="No">No</option>
                            	</select>    
                        	</div>
                    	</div>
                    		<div class="form-group row liquidobaterias">
                           		<div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                            	<div class="col-md-2">
                            	<input type="number" name="litrosb" id="litrosb" default="0" min="0" class="form-control"/></div>
                            	<div class="col-md-2"><span>Lts</span></div>
                        	</div>
                	    <div class="form-group row">
                      		<div class="col-md-8 col-md-offset-1"><span>Revisión de las Escobillas del Limpia Parabrisas.</span><strong>  ¿Se realizó sustitución?</strong></div>
                        	<div class="col-md-2">
                            	<select name="escobillas" id="escobillas" class="form-control">
                                	<option value="No">No</option>
                                	<option value="Si">Si</option>
                            	</select>    
                        	</div>
                    	</div>

                	    <div class="form-group row">
                      		<div class="col-md-8 col-md-offset-1"><span>Revisión de la Instalación de Filtros de Aire.</span><strong>  ¿Se realizó sustitución?</strong></div>
                        	<div class="col-md-2">
                            	<select name="filtros" id="filtros" class="form-control">
                                	<option value="Si">Si</option>
                                	<option value="No">No</option>
                            	</select>    
                        	</div>
                    	</div>
                	    <div class="form-group row">
                      		<div class="col-md-8 col-md-offset-1"><span>Chequeo del Nivel de Liquido de Accionamiento Hidroestatico del Ventilador.</span><strong>   ¿Está en el Nivel indicado?</strong></div>
                        	<div class="col-md-2">
                            	<select name="liquidoven" id="liquidoven" class="form-control">
                                	<option value="Si">Si</option>
                                	<option value="No">No</option>
                            	</select>    
                        	</div>
                    	</div>
                    		<div class="form-group row liquidoventilador">
                           		<div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                            	<div class="col-md-2">
                            	<input type="number" name="litrosven" id="litrosven" default="0" min="0" class="form-control"/></div>
                            	<div class="col-md-2"><span>Lts</span></div>
                        	</div>
                	    <div class="form-group row">
                      		<div class="col-md-8 col-md-offset-1"><span>Liberación de agua en Depositos de Aire a presión.</span></div>
                        	<div class="col-md-2">
                            	<select name="airepresion" id="airepresion" class="form-control">
                                	<option value="Si">Si</option>
                                	<option value="No">No</option>
                            	</select>    
                        	</div>
                    	</div>
                	    <div class="form-group row">
                      		<div class="col-md-8 col-md-offset-1"><span>Liberacion de agua en el Filtro de Combustible.</span></div>
                        	<div class="col-md-2">
                            	<select name="filtroscomb" id="filtroscomb" class="form-control">
                                	<option value="Si">Si</option>
                                	<option value="No">No</option>
                            	</select>    
                        	</div>
                    	</div>
                	    <div class="form-group row">
                      		<div class="col-md-8 col-md-offset-1"><span>Revisar el Estado del desgaste del Forro de Freno.</span><strong>  ¿Realizó Sustitución?</strong></div>
                        	<div class="col-md-2">
                            	<select name="forro" id="forro" class="form-control">
                                	<option value="Si">Si</option>
                                	<option value="No">No</option>
                            	</select>    
                        	</div>
                    	</div>
                	    <div class="form-group row">
                      		<div class="col-md-8 col-md-offset-1"><span>Revisar el estado de las Correas Trapezoidales.</span><strong>  ¿Realizó Sustitución?</strong></div>
                        	<div class="col-md-2">
                            	<select name="correas" id="correas" class="form-control">
                                	<option value="Si">Si</option>
                                	<option value="No">No</option>
                            	</select>    
                        	</div>
                    	</div>
                    	<div class="form-group row">
                      		<div class="col-md-8 col-md-offset-1"><span>Limpieza de las Rejillas de Filtrantes de Recirculacion del Climatizador.</span><strong>  ¿Realizó Sustitución?</strong></div>
                        	<div class="col-md-2">
                            	<select name="rejillas" id="rejillas" class="form-control">
                                	<option value="Si">Si</option>
                                	<option value="No">No</option>
                            	</select>    
                        	</div>
                        </div>
                    	</div>


					</div>
                			@include('tools.botones-registrar')
            	</div>
            			{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
$(document).ready(function(){
        $(".liquidobaterias").toggle();
        $(".liquidoventilador").toggle(); //por cada uno
        

 $('#liquidobat').on('change', function() {
            if(this.value == "No"){
                $(".liquidobaterias").toggle();
            }
            else{
                 $(".liquidobaterias").toggle();
            };
});

 $('#liquidoven').on('change', function() {
            if(this.value == "No"){
                $(".liquidoventilador").toggle();
            }
            else{
                 $(".liquidoventilador").toggle();
            };

});

 
 

});

</script>   
@endsection