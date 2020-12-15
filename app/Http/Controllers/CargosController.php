<?php

namespace App\Http\Controllers;

use App\Cargos;
use Illuminate\Http\Request;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {
        //
        $cargos = Cargos::all();
        return view('admin.cargos',['cargos'=>$cargos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.nuevoCargo');
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
        $cargos=new Cargos;
        $cargos->nombre=$request->nombre;
        $cargos->descripcion=$request->descripcion;
        $cargos->save();

        return redirect('cargos/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function show(Cargos $cargos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cargos = Cargos::find($id);

         return view('admin.actualizarCargo',['cargos'=>$cargos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $cargos=Cargos::find($id);
        $cargos->nombre=$request->nombre;
        $cargos->descripcion=$request->descripcion;
        $cargos->save();

        $cargos = Cargos::all();
        return view('admin.cargos',['cargos'=>$cargos]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Cargos::destroy($id);
        $cargos = Cargos::all();
        return view('admin.cargos',['cargos'=>$cargos]);
    }
}
