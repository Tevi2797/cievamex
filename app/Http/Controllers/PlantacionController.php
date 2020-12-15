<?php

namespace App\Http\Controllers;

use App\Plantacion;
use App\TipoPlantacion;
use App\Parcela;
use App\Especie;
use App\CicloFloracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class PlantacionController extends Controller
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

    public function estado($id){

        $plantacion = Plantacion::find($id);
        $ciclos = CicloFloracion::where('id_plantacion',$plantacion->id)
        ->orderBy('created_at','asc')
        ->get();
        $view = view('plantaciones.estadopdf',compact('plantacion','ciclos'));


        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream();

    }

    public function graficar($id){


        $parcela = Parcela::find($id);
        $plantacion = Plantacion::where('id_parcela',$parcela->id)->first();
        $ciclos = CicloFloracion::where('id_plantacion',$plantacion->id)->orderBy('created_at','asc')
       ->get();




        return view('parcelas.seguimiento',['ciclos'=>$ciclos]);
    }

    public function nuevo($id){
        $tipos = TipoPlantacion::all();
        $parcela= Parcela::find($id);
        $especies = Especie::all();

        return view('plantaciones.nuevaPlantacion',['tipos'=>$tipos,
            'parcela'=>$parcela,'especies'=>$especies]);
    }

    public function mostrarplantacion($id){
        $parcela= Parcela::find($id);

        $id_parcela = $parcela->id;

        $plantaciones = Plantacion::where('id_parcela',$id_parcela)->get();

        return view('plantaciones.plantaciones',['plantaciones'=>$plantaciones]);

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
        $id = $request->id;

        $plantacion = new Plantacion;
        $plantacion->cantidad =$request->cantidad;
        $plantacion->año =$request->año;
        $plantacion->id_especie =$request->especie;
        $plantacion->id_tipoplantacion =$request->tipo;
        $plantacion->id_parcela =$id;

        $plantacion->save();

        $parcela = Parcela::find($id);

        $id_parcela = $parcela->id;

        $plantaciones = Plantacion::where('id_parcela',$id_parcela)->get();


        return view('plantaciones.plantaciones',['plantaciones'=>$plantaciones]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plantacion  $plantacion
     * @return \Illuminate\Http\Response
     */
    public function show(Plantacion $plantacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plantacion  $plantacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data =Crypt::decrypt($id);
        $especies = Especie::all();
        $tipos = TipoPlantacion::all();
        $plantacion = Plantacion::find($data['id']);
        return view('plantaciones.actualizarPlantacion',['plantacion'=>$plantacion,
            'especies'=>$especies,'tipos'=>$tipos]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plantacion  $plantacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data =Crypt::decrypt($id);
        $plantacion = Plantacion::find($data['id']);
        $plantacion->cantidad =$request->cantidad;
        $plantacion->año =$request->año;
        $plantacion->id_especie =$request->especie;
        $plantacion->id_tipoplantacion =$request->tipo;


        $plantacion->save();

        $parcela = Parcela::find($plantacion->id_parcela);

        $id_parcela = $parcela->id;

        $plantaciones = Plantacion::where('id_parcela',$id_parcela)->get();


        return view('plantaciones.plantaciones',['plantaciones'=>$plantaciones]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plantacion  $plantacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data =Crypt::decrypt($id);
        $plantacion = Plantacion::find($data['id']);
        $parcela = Parcela::find($plantacion->id_parcela);

        $id_parcela = $parcela->id;
        Plantacion::destroy($data['id']);
        $plantaciones = Plantacion::where('id_parcela',$id_parcela)->get();


        return view('plantaciones.plantaciones',['plantaciones'=>$plantaciones]);


    }
}
