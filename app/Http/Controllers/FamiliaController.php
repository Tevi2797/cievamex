<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Enfermedades;
use App\Productor;
use App\Familia_Enfermedad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FamiliaController extends Controller
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
    public function listaFamilia($id){

       $productor = Productor::find($id);
       $familias = Familia::where('id_productor', $id)->get();
       
        return view('productores.familias',['familias'=>$familias,
                'productor'=>$productor]);
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
    public function mostrar($id){
        $productor = Productor::find($id);
        $enfermedades = Enfermedades::all();


        return view('productores.agregarFamilia',['productor'=>$productor,
            'enfermedades'=>$enfermedades]);
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
        if($request->enfermedad==null){
            $familia = new Familia;
            $familia->nombre=$request->nombre;
            $familia->apellido_pat=$request->apellido_pat;
            $familia->apellido_mat=$request->apellido_mat;
            $familia->edad=$request->edad;
            $familia->nacimiento=$request->date;
            $familia->parentesco=$request->parentesco;
            $familia->escolaridad=$request->escolaridad;
            $familia->ingreso=$request->ingreso;
            $familia->gasto=$request->gasto;
            $familia->id_productor=$request->id_productor;

            $familia->save();
            $id= $request->id_productor;
            $productor = Productor::find($id);
             $familias = Familia::where('id_productor', $id)->get();
       
        return view('productores.familias',['familias'=>$familias,
                'productor'=>$productor]);
            
        }else{
            $familia = new Familia;
            $enfermedades = new Familia_Enfermedad;


            $familia->nombre=$request->nombre;
            $familia->apellido_pat=$request->apellido_pat;
            $familia->apellido_mat=$request->apellido_mat;
            $familia->edad=$request->edad;
            $familia->nacimiento=$request->date;
            $familia->parentesco=$request->parentesco;
            $familia->escolaridad=$request->escolaridad;
            $familia->ingreso=$request->ingreso;
            $familia->gasto=$request->gasto;
            $familia->id_productor=$request->id_productor;
            $familia->save();
            $idmax= Familia::max('id');

                
            $familia->enfermedades()->attach($request->input('enfermedad'));
            
             $id= $request->id_productor;
            $productor = Productor::find($id);
             $familias = Familia::where('id_productor', $id)->get();
       
        return view('productores.familias',['familias'=>$familias,
                'productor'=>$productor]);

        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function show(Familia $familia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $familiar = Familia::find($id);
        $enfermedades = Enfermedades::all();
        return view('productores.actualizarFamilia',['familiar'=>$familiar,
            'enfermedades'=>$enfermedades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
            $familia =Familia::find($id);
           

            $familia->nombre=$request->nombre;
            $familia->apellido_pat=$request->apellido_pat;
            $familia->apellido_mat=$request->apellido_mat;
            $familia->edad=$request->edad;
            $familia->nacimiento=$request->date;
            $familia->parentesco=$request->parentesco;
            $familia->escolaridad=$request->escolaridad;
            $familia->ingreso=$request->ingreso;
            $familia->gasto=$request->gasto;
          
            $familia->save();
           
            
             $id_pro= $request->id_productor;
            $productor = Productor::find($id_pro);
             $familias = Familia::where('id_productor', $id)->get();
       
          $productores = Productor::all();
        
       
        return view('productores.productorFamilia',['productores'=>$productores]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       
        Familia::destroy($id);
        $productores = Productor::all();
        
       
        return view('productores.productorFamilia',['productores'=>$productores]);
    }
}
