<?php

namespace App\Http\Controllers;

use App\Especie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class EspecieController extends Controller
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
        $especies = Especie::all();

        return view('plantaciones.especies',['especies'=>$especies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantaciones.nuevaEspecie');

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
        $especie = new Especie;
        $especie->nombre_comun = $request->nombre;
        $especie->nombre_cientifico = $request->cientifico;
        $especie->descripcion = $request->descripcion;

        $especie->save();

        return redirect('especies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function show(Especie $especie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data =Crypt::decrypt($id);
        $especie = Especie::find($data['id']);

        return view('plantaciones.actualizarEspecie',['especie'=>$especie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data =Crypt::decrypt($id);
        $especie = Especie::find($data['id']);

        $especie->nombre_comun = $request->nombre;
        $especie->nombre_cientifico = $request->cientifico;
        $especie->descripcion = $request->descripcion;

        $especie->save();

        return redirect('especies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data =Crypt::decrypt($id);
        Especie::destroy($data['id']);
    }
}
