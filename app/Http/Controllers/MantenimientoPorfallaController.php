<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ServicioUnidadOperador;
use App\MantenimientoPorfalla;
use App\PiezaPorfalla;
use App\Http\Requests\CrearMantenimientoPorfallaRequest;
use Illuminate\Http\Request;
use App\User;
use App\Falla;
use App\Unidad;
use App\Pieza_Neoplan;



class MantenimientoPorfallaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{				
		$unidades =  ServicioUnidadOperador::all();
		$fallas =  Falla::all();
		$piezasneo = Pieza_Neoplan::all();
		return view('Mantenimiento_Porfalla.crear',compact('unidades', 'fallas', 'piezas', 'piezasneo'));	

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
	public function store(CrearMantenimientoPorfallaRequest $request)
	{
		$falla = MantenimientoPorfalla::create($request->all());
		$fallaid = $falla->id;
		$cambio = $request->cambio;

		if ($cambio=="Si") {
			$piezasneo = Pieza_Neoplan::all();
			$piezas = 	PiezaPorfalla::where('id_porfallas','=',$fallaid);
			return view('Mantenimiento_Porfalla.detallefalla',compact('piezasneo','piezas','fallaid'));
		} else {
			return view('home');
		}
		
		
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