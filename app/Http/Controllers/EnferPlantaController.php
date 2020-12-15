<?php

namespace App\Http\Controllers;

use App\EnferPlanta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class EnferPlantaController extends Controller
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
        $enfermedades = EnferPlanta::all();
        return view('plantaciones.enfermedades',['enfermedades'=>$enfermedades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantaciones.nuevaEnfermedad');
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
        $enfermedad = new EnferPlanta;
        $enfermedad->nombre =$request->nombre;
        $enfermedad->descripcion =$request->descripcion;

        $enfermedad->save();

        return redirect('enfermedades');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EnferPlanta  $enferPlanta
     * @return \Illuminate\Http\Response
     */
    public function show(EnferPlanta $enferPlanta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EnferPlanta  $enferPlanta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=Crypt::decrypt($id);

        $enfermedad = EnferPlanta::find($data['id']);

        return view('plantaciones.actualizarEnfermedad',['enfermedad'=>$enfermedad]);

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EnferPlanta  $enferPlanta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)

    {
        //
        $data=Crypt::decrypt($id);
        $enfermedad = EnferPlanta::find($data['id']);

        $enfermedad->nombre =$request->nombre;
        $enfermedad->descripcion =$request->descripcion;

        $enfermedad->save();

        return redirect('enfermedades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EnferPlanta  $enferPlanta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Crypt::decrypt($id);
        EnferPlanta::destroy($data['id']);

        return redirect('enfermedades');
    }
}
