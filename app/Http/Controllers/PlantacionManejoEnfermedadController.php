<?php

namespace App\Http\Controllers;

use App\Plantacion_ManejoEnfermedad;
use Illuminate\Http\Request;
use App\ManejoEnfermedad;
use App\Plantacion;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class PlantacionManejoEnfermedadController extends Controller
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
        return view('plantaciones.listaManejosEnfermedades',['plantacion'=>$plantacion]);
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
        $id_manejo = $request->manejo;

        $plantacion = Plantacion::find($id_plantacion);

        $plantacion->manejo_enfermedades()->attach($id_manejo);

        return view('plantaciones.listaManejosEnfermedades',['plantacion'=>$plantacion]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plantacion_ManejoEnfermedad  $plantacion_ManejoEnfermedad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $manejos = ManejoEnfermedad::all();
        $plantacion  = Plantacion::find($id);

        return view('plantaciones.addManejoEnfermedad',['manejos'=>$manejos,
            'plantacion'=>$plantacion]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plantacion_ManejoEnfermedad  $plantacion_ManejoEnfermedad
     * @return \Illuminate\Http\Response
     */
    public function edit(Plantacion_ManejoEnfermedad $plantacion_ManejoEnfermedad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plantacion_ManejoEnfermedad  $plantacion_ManejoEnfermedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plantacion_ManejoEnfermedad $plantacion_ManejoEnfermedad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plantacion_ManejoEnfermedad  $plantacion_ManejoEnfermedad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data =Crypt::decrypt($id);

        $plantacion = Plantacion::find($data['id_plantacion']);

        $plantacion->manejo_enfermedades()->detach($data['id_manejo']);

        return view('plantaciones.listaManejosEnfermedades',['plantacion'=>$plantacion]);

    }
}
