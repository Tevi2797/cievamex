<?php

namespace App\Http\Controllers;

use App\TipoPlantacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class TipoPlantacionController extends Controller
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
        }else{
            
             return redirect('alertas');
        }
        
        });
    }
    public function index()
    {
        //
        $tipos = TipoPlantacion::all();

        return view('plantaciones.tipos',['tipos'=>$tipos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantaciones.nuevoTipo');
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
        $tipo = new TipoPlantacion;

        $tipo->nombre=$request->nombre;
        $tipo->descripcion=$request->descripcion;

        $tipo->save();

        return redirect('tipos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoPlantacion  $tipoPlantacion
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPlantacion $tipoPlantacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoPlantacion  $tipoPlantacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data =Crypt::decrypt($id);
        $tipo = TipoPlantacion::find($data['id']);

        return view('plantaciones.actualizarTipo',['tipo'=>$tipo]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoPlantacion  $tipoPlantacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data =Crypt::decrypt($id);
        $tipo = TipoPlantacion::find($data['id']);

        $tipo->nombre=$request->nombre;
        $tipo->descripcion=$request->descripcion;

        $tipo->save();

        return redirect('tipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoPlantacion  $tipoPlantacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data =Crypt::decrypt($id);
        TipoPlantacion::destroy($data['id']);

        return redirect('tipos');

    }
}
