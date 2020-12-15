<?php

namespace App\Http\Controllers;

use App\Enfermedades_plantaciones;
use Illuminate\Http\Request;
use App\EnferPlanta;
use App\Plantacion;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class EnfermedadesPlantacionesController extends Controller
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
     public function ver($id)
    {
        //
        $plantacion = Plantacion::find($id);

        return view('plantaciones.listaEnfermedades',['plantacion'=>$plantacion]);
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
        
        $plantacion = Plantacion::find($request->id);
    
        $plantacion->enfermedadesplantacion()->attach($request->enfermedad);

        $plantacion = Plantacion::find($request->id);

        return view('plantaciones.listaEnfermedades',['plantacion'=>$plantacion]);
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enfermedades_plantaciones  $enfermedades_plantaciones
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $plantacion = Plantacion::find($id);
        $enfermedades = EnferPlanta::all();

        return view('plantaciones.addEnferPlanta',['plantacion'=>$plantacion,
                    'enfermedades'=>$enfermedades]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enfermedades_plantaciones  $enfermedades_plantaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Enfermedades_plantaciones $enfermedades_plantaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enfermedades_plantaciones  $enfermedades_plantaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enfermedades_plantaciones $enfermedades_plantaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enfermedades_plantaciones  $enfermedades_plantaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data= Crypt::decrypt($id);
        $plantacion = Plantacion::find($data['id_plantacion']);
        $plantacion->enfermedadesplantacion()->detach($data['id_enfermedad']);

        return view('plantaciones.listaEnfermedades',['plantacion'=>$plantacion]);
    }
}
