<?php

namespace App\Http\Controllers;

use App\Riego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
class RiegoController extends Controller
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
        $riegos = Riego::all();

        return view('parcelas.riegos',['riegos'=>$riegos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('parcelas.nuevoRiego');
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
        $riego = new Riego();
        $riego->nombre =$request->nombre;
        $riego->descripcion =$request->descripcion;

        $riego->save();

        $riegos = Riego::all();

        return view('parcelas.riegos',['riegos'=>$riegos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Riego  $riego
     * @return \Illuminate\Http\Response
     */
    public function show(Riego $riego)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Riego  $riego
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=Crypt::decrypt($id);
        
        $riego = Riego::find($data['id']);

        return view('parcelas.actualizarRiego',['riego'=>$riego]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Riego  $riego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=Crypt::decrypt($id);
        $riego = Riego::find($data['id']);

        $riego->nombre =$request->nombre;
        $riego->descripcion =$request->descripcion;

        $riego->save();

        $riegos = Riego::all();
        return view('parcelas.riegos',['riegos'=>$riegos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Riego  $riego
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Crypt::decrypt($id);
        Riego::destroy($data['id']);

        $riegos = Riego::all();
        return view('parcelas.riegos',['riegos'=>$riegos]);
    }
}
