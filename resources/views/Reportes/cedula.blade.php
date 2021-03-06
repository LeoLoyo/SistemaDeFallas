@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
			
				
				 
                  <div id="graficos" class="col-md-6" style="height:250px"></div>
			

	              <div id="graficos1" class="col-md-6"style="height:250px"></div>


				<div class="col-md-12">
					<div class="panel panel-danger">
						<div class="panel-heading">Historial de incidencias</div>
							<table class="table table-bordered table-striped">
								<tr>
									<th>Fecha</th>
									<th>Servicio</th>
									<th>Lugar</th>
									<th>Tipo De Falla</th>
									<th>Mecanico</th>
									<th>Diagnostico Del Mecanico</th>
									<th>Fecha De Operatividad</th>
									<th>Dias Inoperatividad</th>
								</tr>
								<tr>
									<td>01/03/2015</td>
									<td>Linea 1</td>
									<td>Parque Del Este</td>
									<td>Falla Electrica</td>
									<td>Pedro Perez</td>
									<td>Bujias Partidas</td>
									<td>03/03/2015</td>
									<td>2</td>
								</tr>
								</table>
						
					</div>
				</div>
			
		</div>
		<script>
                        $(document).ready(function(){

                        	var valor = 70;
					    //Diagrama de "Torta"
					    	var grafica = new Morris.Donut({
                            element: 'graficos',
                             resize: true,
                             redraw: true,
                              data: [
                                {label: "Operativa", value: valor},
                                {label: "Inoperativa", value: 15},
                                {label: "Reserva", value: 20}
                              ]
                            });

					    	  //Diagrama de Barras
							var data = [
							      { y: 'Enero', a: 100, b: 98},
							      { y: 'Febrero', a: 65,  b: 75},
							      { y: 'Marzo', a: 50,  b: 50},
							      { y: 'Abril', a: 75,  b: 60},
							      { y: 'Mayo', a: 80,  b: 65},
							      { y: 'Junio', a: 90,  b: 70}
							    ],
							    config = {
							      data: data,
							      xkey: 'y',
							      ykeys: ['a', 'b'],
							      labels: ['Total Operativas', 'Total Inoperativas'],
							      fillOpacity: 0.6,
							      hideHover: 'auto',
							      behaveLikeLine: true,
							      resize: true,
							      pointFillColors:['#ffffff'],
							      pointStrokeColors: ['black'],
							      lineColors:['blue','red']
							  };
							config.element = 'graficos1';
							Morris.Bar(config);

                        });

                        </script>
@endsection