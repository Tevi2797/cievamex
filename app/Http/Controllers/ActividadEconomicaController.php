<?php

namespace App\Http\Controllers;

use App\ActividadEconomica;
use Illuminate\Http\Request;
use App\Estados;
use App\Municipio;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
class ActividadEconomicaController extends Controller
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
        if( Auth::check() && Auth::user()->tipo=='Administrador'){
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
        $actividades = ActividadEconomica::all();
        return view('productores.actividades',['actividades'=>$actividades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productores.nuevaActividad');
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
       
        $actividad = new ActividadEconomica;

        $actividad->nombre = $request->actividad;
        $actividad->descripcion = $request->descripcion;

        $actividad->save();

        return redirect('actividades');
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ActividadEconomica  $actividadEconomica
     * @return \Illuminate\Http\Response
     */
    public function show(ActividadEconomica $actividadEconomica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ActividadEconomica  $actividadEconomica
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $data=Crypt::decrypt($id);
        
        $actividad = ActividadEconomica::find($data['id']);

        return view('productores.actualizarActividad',['actividad'=>$actividad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ActividadEconomica  $actividadEconomica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=Crypt::decrypt($id);
        $actividad = ActividadEconomica::find($data['id']);

        $actividad->nombre = $request->actividad;
        $actividad->descripcion = $request->descripcion;

        $actividad->save();

        return redirect('actividades');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ActividadEconomica  $actividadEconomica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Crypt::decrypt($id);
        ActividadEconomica::destroy($data['id']);

         return redirect('actividades');

    }
}
