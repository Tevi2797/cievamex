<?php

namespace App\Http\Controllers;

use App\Familia_Enfermedad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FamiliaEnfermedadController extends Controller
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
        }else if(Auth::check() && Auth::user()->tipo=='Productor'){
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Familia_Enfermedad  $familia_Enfermedad
     * @return \Illuminate\Http\Response
     */
    public function show(Familia_Enfermedad $familia_Enfermedad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Familia_Enfermedad  $familia_Enfermedad
     * @return \Illuminate\Http\Response
     */
    public function edit(Familia_Enfermedad $familia_Enfermedad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Familia_Enfermedad  $familia_Enfermedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Familia_Enfermedad $familia_Enfermedad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Familia_Enfermedad  $familia_Enfermedad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Familia_Enfermedad $familia_Enfermedad)
    {
        //
    }
}
