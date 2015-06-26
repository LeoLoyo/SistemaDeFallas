<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{	
			$table->increments('id');
			$table->string('cedula')->unique();
			$table->string('pnombre',20);
			$table->string('snombre',20);
			$table->string('papellido',20);
			$table->string('sapellido',20);
			$table->date('fnacimiento');
			$table->date('fingreso');
			$table->string('cargo',10);
			$table->string('telefono',11);
			$table->string('direccion',100);
			$table->string('email')->unique();
			
			
			$table->string('password',60);
			$table->string('password_confirmation',60);
			$table->string('preguntas',30);
			$table->string('respuestas',10);
			$table->rememberToken();
			$table->timestamps();

			//$table->primary('cedula'); 	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
