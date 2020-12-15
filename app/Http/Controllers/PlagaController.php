<?php

namespace App\Http\Controllers;

use App\Plaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class PlagaController extends Controller
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
        $plagas = Plaga::all();
        return view('plantaciones.plagas',['plagas'=>$plagas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantaciones.nuevaPlaga');
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
        $plaga = new Plaga;
        $plaga->nombre =$request->nombre;
        $plaga->descripcion =$request->descripcion;
        $plaga->save();

        return redirect('plagas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function show(Plaga $plaga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $data=Crypt::decrypt($id);
         $plaga = Plaga::find($data['id']);

         return view('plantaciones.actualizarPlaga',['plaga'=>$plaga]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=Crypt::decrypt($id);
        $plaga = Plaga::find($data['id']);

        $plaga->nombre =$request->nombre;
        $plaga->descripcion =$request->descripcion;
        $plaga->save();

        return redirect('plagas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Crypt::decrypt($id);
        Plaga::destroy($data['id']);
    }
}
