<?php

namespace App\Http\Controllers;

use App\ManejoPlaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class ManejoPlagaController extends Controller
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
        $manejos = ManejoPlaga::all();
        return view('plantaciones.manejospla',['manejos'=>$manejos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantaciones.nuevoManejoPlaga');
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
        $manejo = new ManejoPlaga;
        $manejo->nombre =$request->nombre;
        $manejo->descripcion =$request->descripcion;
        $manejo->save();

        return redirect('manejospla');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ManejoPlaga  $manejoPlaga
     * @return \Illuminate\Http\Response
     */
    public function show(ManejoPlaga $manejoPlaga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ManejoPlaga  $manejoPlaga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $data=Crypt::decrypt($id);

         $manejo = ManejoPlaga::find($data['id']);

         return view('plantaciones.actualizarManejopla',['manejo'=>$manejo]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ManejoPlaga  $manejoPlaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=Crypt::decrypt($id);

        $manejo = ManejoPlaga::find($data['id']);
        $manejo->nombre =$request->nombre;
        $manejo->descripcion =$request->descripcion;
        $manejo->save();

        return redirect('manejospla');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ManejoPlaga  $manejoPlaga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Crypt::decrypt($id);
        ManejoPlaga::destroy($data['id']);
        return redirect('manejospla');
    }
}
