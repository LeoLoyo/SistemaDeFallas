<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ServicioUnidadOperador;
use App\Mantenimientomensual;
use App\Http\Requests\CrearMantenimientoMensualRequest;
use App\Http\Requests\FechaRequest;
use Illuminate\Http\Request;
use App\User;
use App\Unidad;

class MantenimientoMensualController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$unidades =  ServicioUnidadOperador::all();
		return view('Mantenimiento_Mensual.crear',compact('unidades'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CrearMantenimientoMensualRequest $request)
	{
		$mensual = MantenimientoMensual::create($request->all());
		return view('home');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
