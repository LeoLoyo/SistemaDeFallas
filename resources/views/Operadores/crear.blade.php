@extends('app') 

@include('tools.sidebar')



@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-danger">
					<div class="panel-heading">Registro De Operador</div>
					<div class="panel-body">
						@include('tools.errors')
						{!! Form::open(['route'=>'operadores.store','method'=>'POST']) !!}
							@include('Personas.create')
							@include('tools.botones-registrar')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function(){
		$('#pais').on('change',function(e){
		
			var pais_id = e.target.value;
			$.get('/ajax-estado?pais_id='+pais_id,function(data){
				$('#estado').empty();
				$.each(data,function(index,estadoObj){
					$('#estado').append('<option value="'+estadoObj.id+'">'+estadoObj.descripcion+'</option>');
				});
			});
			console.log(e);
		});
		$('#estado').on('change',function(e){
		
			var estado_id = e.target.value;
			$.get('/ajax-ciudad?estado_id='+estado_id,function(data){
				$('#ciudad').empty();
				$.each(data,function(index,ciudadObj){
					$('#ciudad').append('<option value="'+ciudadObj.id+'">'+ciudadObj.descripcion+'</option>');
				});
			});
			console.log(e);
		});
		$('#ciudad').on('change',function(e){
		
			var ciudad_id = e.target.value;
			$.get('/ajax-municipio?ciudad_id='+ciudad_id,function(data){
				$('#municipio').empty();
				$.each(data,function(index,municipioObj){
					$('#municipio').append('<option value="'+municipioObj.id+'">'+municipioObj.descripcion+'</option>');
				});
			});
			console.log(e);
		});
});
	

	</script>
@endsection

