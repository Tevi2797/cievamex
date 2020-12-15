<?php

namespace App\Http\Controllers;

use App\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class TutorController extends Controller
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
        $tutores = Tutor::all();

        return view('plantaciones.tutores',['tutores'=>$tutores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantaciones.nuevoTutor');
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
        $tutor = new Tutor;

        $tutor->nombre =$request->nombre;
        $tutor->descripcion =$request->descripcion;

        $tutor->save();

        return redirect('tutores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Tutor $tutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data =Crypt::decrypt($id);
        $tutor = Tutor::find($data['id']);

        return view('plantaciones.actualizarTutor',['tutor'=>$tutor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data =Crypt::decrypt($id);
        $tutor = Tutor::find($data['id']);


        $tutor->nombre =$request->nombre;
        $tutor->descripcion =$request->descripcion;

        $tutor->save();

        return redirect('tutores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $data =Crypt::decrypt($id);
         Tutor::destroy($data['id']);

         return redirect('tutores');

    }
}
