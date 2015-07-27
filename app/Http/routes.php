<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'HomeController@index');






Route::get('home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::get('unidad', 'UnidadController@index');
Route::get('falla', 'FallaController@registrarfalla');



Route::controllers([
	'auth' => 'Auth\AuthController',
	//'password' => 'Auth\PasswordController',
]);





/*Vista de Usuarios*/
Route::get('rusuario','RegistrarController@index');
Route::get('usuariosall','RegistrarController@index');
Route::get('changepassword','RegistrarController@change');


/*Vistas De Operador*/
//Route::get('roperador','OperadorController@registraroperador');
//Route::get('operadores','OperadorController@index');

/*Vistas De Unidades*/
Route::get('uoperador','UnidadController@asignarunidad');
Route::get('uupdate','UnidadController@update');

/*Vistas De Fallas*/
Route::get('rfalla','FallaController@registrarfalla');
Route::get('rcfalla','FallaController@registrarcategoriafalla');
Route::get('rfuoperador','FallaController@registrarfallaunidadoperador');
Route::get('rtfalla','FallaController@registrartipofalla');
Route::get('incidenciaunidad','ReporteController@incidenciaunidad');
Route::get('cedula','ReporteController@cedula');
/*Vistas De Reportes*/
/*Vistas De Transacciones*/
Route::get('servicios/operadores','TransaccionController@servicio_operador');
Route::get('servicios/unidades','TransaccionController@servicio_unidad');

resource('opciones','OpcionesController');
resource('unidades','UnidadController');
resource('operadores','OperadorController');
resource('unidadoperadores','UnidadOperadorController');
resource('fallas','FallaController');
resource('categorias','CategoriaController');
resource('tipos','TipoController');
resource('reportes','ReporteController');
resource('operadores','OperadorController');