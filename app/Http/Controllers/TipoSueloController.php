<?php

namespace App\Http\Controllers;

use App\TipoSuelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
class TipoSueloController extends Controller
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
        $suelos = TipoSuelo::all();
         return view('parcelas.suelos',['suelos'=>$suelos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('parcelas.nuevoSuelo');
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
        $suelo =new TipoSuelo();
        $suelo->nombre =$request->nombre;
        $suelo->descripcion =$request->descripcion;

        $suelo->save();

        $suelos = TipoSuelo::all();
        return view('parcelas.suelos',['suelos'=>$suelos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoSuelo  $tipoSuelo
     * @return \Illuminate\Http\Response
     */
    public function show(TipoSuelo $tipoSuelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoSuelo  $tipoSuelo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=Crypt::decrypt($id);
        
        $suelo = TipoSuelo::find($data['id']);

        return view('parcelas.actualizarSuelo',['suelo'=>$suelo]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoSuelo  $tipoSuelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=Crypt::decrypt($id);
        $suelo = TipoSuelo::find($data['id']);

        $suelo->nombre =$request->nombre;
        $suelo->descripcion =$request->descripcion;

        $suelo->save();

        $suelos = TipoSuelo::all();
        return view('parcelas.suelos',['suelos'=>$suelos]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoSuelo  $tipoSuelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Crypt::decrypt($id);
        TipoSuelo::destroy($data['id']);

        $suelos = TipoSuelo::all();
        return view('parcelas.suelos',['suelos'=>$suelos]);
    }
}
