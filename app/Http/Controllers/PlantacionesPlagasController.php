<?php

namespace App\Http\Controllers;

use App\Plantaciones_Plagas;
use Illuminate\Http\Request;
use App\Plantacion;
use App\Plaga;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class PlantacionesPlagasController extends Controller
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
        return view('plantaciones.listaPlagas',['plantacion'=>$plantacion]);
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
        $id_plaga = $request->plaga;

       $plantacion = Plantacion::find($id_plantacion);
       
       $plantacion->plagas()->attach($id_plaga);
        return view('plantaciones.listaplagas',['plantacion'=>$plantacion]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plantaciones_Plagas  $plantaciones_Plagas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $plantacion = Plantacion::find($id);
        $plagas = Plaga::all();
        return view('plantaciones.addPlaga',['plantacion'=>$plantacion,
                    'plagas'=>$plagas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plantaciones_Plagas  $plantaciones_Plagas
     * @return \Illuminate\Http\Response
     */
    public function edit(Plantaciones_Plagas $plantaciones_Plagas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plantaciones_Plagas  $plantaciones_Plagas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plantaciones_Plagas $plantaciones_Plagas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plantaciones_Plagas  $plantaciones_Plagas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Crypt::decrypt($id);

        $plantacion = Plantacion::find($data['id_plantacion']);

        $plantacion->plagas()->detach($data['id_plaga']);

        return view('plantaciones.listaplagas',['plantacion'=>$plantacion]);
    }
}
