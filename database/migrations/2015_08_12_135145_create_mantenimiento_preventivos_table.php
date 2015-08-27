<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoPreventivosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimiento_preventivos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('users');
			$table->integer('serviciounidadoperador_id')->unsigned();
			$table->foreign('serviciounidadoperador_id')->references('id')->on('servicio_unidad_operadores');
			$table->date('fecha');			
			$table->decimal('kilometraje',10,2);		    
			$table->string('combustible');
			$table->string('rlfiltroa');//revision y limpieza filtro de aire
			$table->string('clubricante');//cambio lubricante motor
			$table->string('cfaceite');//cambio filtro de aceite
			$table->string('lfcombustible');//lavado del filtro de combustible
			$table->string('rlineascom');//revision de las lineas combustible descarte de fuga
			$table->string('rrefrigerante');//revision (descarte de fuga) de refrigerante
			$table->string('rcorrea');//revision de correa
			$table->string('rtapasr');//revision de las tapas de radiador
			$table->string('lavadom'); //lavado de motor
			$table->string('rsalidaa'); //Revisión: Salideros de Aceite
			$table->string('rjuegovolante');//Revisión: Juego del Volante
			$table->string('abarrasy');//Ajustamiento de las Barras Yoquis de Dirección
			$table->string('raengrase');//Revisión, Ajuste y Engrase
			$table->string('rnadireccion');//Revisión: Nivel de Aceite de Direccion
			$table->string('lfgases');//Lavado: Filtro de Gases
			$table->string('ceembrague');//Chequeo y Engrase
			$table->string('lavador');//Lavado del Radiador
			$table->string('cabmangueras');//Chequeo: Abrazaderas y Mangueras
			$table->string('raamortiguador');//Revisión(Descarte de Fuga): Aceite Amortiguadores y Fijación Soporte
			$table->string('rmuelle');//Revisión: de Muelles
			$table->string('lubricar');//Lubricar
			$table->string('racamaras');//Revisión(Descarte de Fuga): Aire en las Cámaras
			$table->string('lbasesusp');//Limpieza: Base Suspensión del Aire
			$table->string('rarboljunta');//Revisión: Arbol y Junta de Transmisión
			$table->string('engrasar');//Engrasar
			$table->string('rsaliderod');//Revisión: Salidero del Diferencial
			$table->string('raceitedif');//Revisión: Nivel del Aceite Diferencial
			$table->string('rbaterias');//Rotación de Baterias
			$table->string('caguabat');//Chequeo: Nivel de Agua de Baterias
			$table->string('mvoltaje');//Medición de Voltaje
			$table->string('albornes');//Ajuste y Limpieza: Bornes de Baterias
			$table->string('rcluces');//Revisión y Chequeo: Luces
			$table->string('cdestino');//Chequeo: Funcionamiento del Indicador de Destino
			$table->string('bandas');//Chequeo y Ajustes: Bandas de Frenos
			$table->string('ccorrea');//Cambio de Correa
			$table->string('cbaterias'); //Cambio de Baterias
			$table->string('cbornes'); //Cambio de Bornes
			$table->string('camlucesi'); //Cambio De Luces Internas
			$table->string('camlucese'); //Cambio de Luces Externas
			$table->string('clucesi'); //¿Cuantas Luces Internas Se Cambiaron?
			$table->string('clucese'); //¿Cuantas Luces Externas Se Cambiaron?
			$table->string('camlucesc'); //Cambio de Luces Cruce
			$table->string('clucesc'); //¿Cuantas Luces de Cruce Se Cambiaron?
			$table->string('camlucesem'); //Cambio de Luces Emergencia
			$table->string('clucesem'); //Cuantas Luces de Emergencia Se Cambiaron?
			$table->string('cornetas'); //Chequeo: Cornetas
			$table->string('discos'); //Chequeo y Ajustes: Discos de Frenos
			$table->string('cambioaa'); //Cambio: Filtro A/A
			$table->string('lavadoaa'); //Lavado: Filtro A/A
			$table->string('mecanico');
			$table->string('tecmecanico');
			$table->string('ayudmecanico');
			$table->string('recibido');
			$table->integer('litrosr');//litros completado
			$table->integer('litrosa');//litros aceite
			$table->integer('litroscomb');//litros combustible
			$table->string('fugarep');//fuga combustible
			$table->string('fugaref');//fuga refrigerante
			$table->string('ctapas');//cambio de tapas
			$table->string('fugaceite');//fuga aceite
			$table->string('grasa');//grasa
			$table->string('abramague');//abrazaderas y embragues
			$table->string('racamort');//aceite de los amortiguadores
			$table->string('laceitedif');//aceite del diferencial
			$table->string('batagua');//agua de baterias
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mantenimiento_preventivos');
	}

}
