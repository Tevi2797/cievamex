<?php

namespace App\Http\Controllers;

use App\Plantacion_Asociado;
use Illuminate\Http\Request;
use App\Plantacion;
use App\CultivoAsociado;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class PlantacionAsociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
          $this->middleware('auth');
        
        $this->middleware(function ($request, $next) {
       
        $tipo= Auth()->user()->tipo;
         if(Auth::check() && Auth::user()->tipo=='Administrador'){
             return $next($request);
         }
        else if(Auth::check() && Auth::user()->tipo=='tecnico'){
            return $next($request);
        }else if(Auth::check() && Auth::user()->tipo=='campo'){
            return $next($request);
        }else{
            
             return redirect('alertas');
        }
        
        });
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function ver($id){

        $plantacion = Plantacion::find($id);

        return view('plantaciones.listaAsociados',[
                'plantacion'=>$plantacion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $id_plantacion = $request->id;
        $id_asociado = $request->asociado;

        $plantacion = Plantacion::find($id_plantacion);

        $plantacion->asociados()->attach($id_asociado);

        return view('plantaciones.listaAsociados',[
                'plantacion'=>$plantacion]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plantacion_Asociado  $plantacion_Asociado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $plantacion = Plantacion::find($id);
        $asociados = CultivoAsociado::all();

        return view('plantaciones.addAsociado',[
                'plantacion'=>$plantacion,'asociados'=>$asociados]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plantacion_Asociado  $plantacion_Asociado
     * @return \Illuminate\Http\Response
     */
    public function edit(Plantacion_Asociado $plantacion_Asociado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plantacion_Asociado  $plantacion_Asociado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plantacion_Asociado $plantacion_Asociado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plantacion_Asociado  $plantacion_Asociado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Crypt::decrypt($id);

        $plantacion = Plantacion::find($data['id_plantacion']);

        $plantacion->asociados()->detach($data['id_asociado']);

        return view('plantaciones.listaAsociados',[
                'plantacion'=>$plantacion]);
    }
}
