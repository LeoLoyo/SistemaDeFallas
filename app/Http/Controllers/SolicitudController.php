<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CrearSolicitudRequest;
use App\Http\Requests\EditarSolicitudRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\Persona;
use App\Almacen;
use App\Mecanico;
use App\Solicitud;
use App\DetalleSolicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller {

	 public function __construct()
    {
        $this->middleware('auth');
    }
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response     
	 */
	public function index()
	{
		$usuarios = User::all();
		$mecanicos = Mecanico::all();
		
		return view('Almacen\solicitud',compact('usuarios','mecanicos'));
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
	public function store(CrearSolicitudRequest $request)
	{
		$solicitud = Solicitud::create($request->all());
		
		$herramientas = Almacen::where('tipo','=','Herramienta')->get();
		$articulos = Almacen::where('tipo','=','Articulo')->get();
		$fluidos = Almacen::where('tipo','=','Fluidos')->get();
		$piezas = Almacen::where('tipo','=','Pieza')->get();
		
		$id = $solicitud->id;
		$detalles = DetalleSolicitud::where('solicitud_id','=','$id')->get();
		
        return view('Almacen/detallesolicitud',compact('detalles','herramientas','articulos','fluidos','piezas','solicitud'));
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
		$solicitud = Solicitud::where('id','=',$id)->first();
		$detalles = DetalleSolicitud::where('solicitud_id','=',$id)->get();
		
        return view('Almacen/verdetalle',compact('solicitud','detalles'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{	
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
	public function listado()
	{
		$solicitudes = Solicitud::where('estado','=','Pendiente')->get();
		return view('Almacen/listadopendiente',compact('solicitudes'));
	}

}
