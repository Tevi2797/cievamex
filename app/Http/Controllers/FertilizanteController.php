<?php

namespace App\Http\Controllers;

use App\Fertilizante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
class FertilizanteController extends Controller
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
        $fertilizantes = Fertilizante::all();

        return view('plantaciones.fertilizantes',['fertilizantes'=>$fertilizantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantaciones.nuevoFertilizante');
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
        $fertilizante = new Fertilizante;
        $fertilizante->nombre = $request->nombre;
        $fertilizante->descripcion = $request->descripcion;

        $fertilizante->save();

        return redirect('fertilizantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fertilizante  $fertilizante
     * @return \Illuminate\Http\Response
     */
    public function show(Fertilizante $fertilizante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fertilizante  $fertilizante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data =Crypt::decrypt($id);

        $fertilizante = Fertilizante::find($data['id']);

        return view('plantaciones.actualizarFertilizante',['fertilizante'=>$fertilizante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fertilizante  $fertilizante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data =Crypt::decrypt($id);
        $fertilizante = Fertilizante::find($data['id']);

        $fertilizante->nombre = $request->nombre;
        $fertilizante->descripcion = $request->descripcion;

        $fertilizante->save();

        return redirect('fertilizantes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fertilizante  $fertilizante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data =Crypt::decrypt($id);
        Fertilizante::destroy($data['id']);
        return redirect('fertilizantes');
    }
}
