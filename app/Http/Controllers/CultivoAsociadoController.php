<?php

namespace App\Http\Controllers;

use App\CultivoAsociado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
class CultivoAsociadoController extends Controller
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
        $asociados = CultivoAsociado::all();

        return view('plantaciones.asociados',['asociados'=>$asociados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantaciones.nuevoAsociado');
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
        $asociado = new CultivoAsociado;
        $asociado->nombre=$request->nombre;
        $asociado->descripcion=$request->descripcion;

        $asociado->save();

        return redirect('asociados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CultivoAsociado  $cultivoAsociado
     * @return \Illuminate\Http\Response
     */
    public function show(CultivoAsociado $cultivoAsociado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CultivoAsociado  $cultivoAsociado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data =Crypt::decrypt($id);
        $asociado = CultivoAsociado::find($data['id']);

        return view('plantaciones.actualizarAsociados',['asociado'=>$asociado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CultivoAsociado  $cultivoAsociado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data =Crypt::decrypt($id);
        $asociado = CultivoAsociado::find($data['id']);

        $asociado->nombre=$request->nombre;
        $asociado->descripcion=$request->descripcion;

        $asociado->save();

        return redirect('asociados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CultivoAsociado  $cultivoAsociado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data =Crypt::decrypt($id);
        CultivoAsociado::destroy($data['id']);

        return redirect('asociados');
    }
}
