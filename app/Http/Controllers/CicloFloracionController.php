<?php

namespace App\Http\Controllers;

use App\CicloFloracion;
use App\Plantacion;
use App\Parcela;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
class CicloFloracionController extends Controller
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantaciones.nuevoCiclo');
    }

    public function nuevoCiclo($id){

        $plantacion = Plantacion::find($id);
        return view('plantaciones.nuevoCiclo',['plantacion'=>$plantacion]);
    }

    public function mostrarCiclos($id){

        $ciclos = CicloFloracion::where('id_plantacion',$id)->get();
        $plan=Plantacion::find($id);
        $parcela=Parcela::where('id',$plan->id_parcela)->select('ha')->first();


        return view('plantaciones.ciclos',['ciclos'=>$ciclos,'ha'=>$parcela->ha]);
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

        $ciclo = new CicloFloracion;


        $inicial = Carbon::parse($request->ini);
        $fin = Carbon::parse($request->fin);


 
        $diasfloracion = $fin->diffInDays($inicial);//obtiene los dias de la floracion

        $diapromedio = $diasfloracion / 2;

        $fechamedia = $inicial->addDays($diapromedio);


        $fechaestimada = $fechamedia->addMonths(9);//funciona correcto

        $fechainicio = Carbon::parse($request->ini);
        $valornuevo = $fechainicio->addDays($diapromedio);

        $realcosecha = Carbon::parse($request->cosecha);

        $edaddias = $realcosecha->diffInDays($valornuevo);
        $edadmeses =  $edaddias / 30.5;


        $porcentaje =$request->prematura / 100;

        $id = $request->id;
        $ciclo->año=$request->año;
        $ciclo->inicio_floracion =$request->ini;
        $ciclo->fin_floracion =$request->fin;
        $ciclo->dias_floracion = $diasfloracion;
        $ciclo->recomendada = $fechaestimada;
        $ciclo->daño =$request->daño;
        $ciclo->caida_prematura =$request->prematura;
        $ciclo->fecha_cosecha = $request->cosecha;
        $ciclo->edad_fruto =$edadmeses;
        $ciclo->produccion =$request->produccion;
        $ciclo->perdida_estimada =(($request->produccion*$porcentaje)/(1-$porcentaje));

        $plantacion=Plantacion::where('id',$id)->select('id_parcela')->first();
       //dd($plantacion);
        $parcela=Parcela::where('id',$plantacion->id_parcela)->select('ha')->first();
        $superficie=$parcela->ha;
        $estimado = $request->produccion / $superficie;
        $ciclo->rendimiento_estimado = $estimado;
        $ciclo->id_plantacion = $id;
        $ciclo->save();

       // $ciclos = CicloFloracion::where('id_plantacion',$id)->get();
       return redirect('/mostrarciclo/'.$ciclo->id_plantacion);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CicloFloracion  $cicloFloracion
     * @return \Illuminate\Http\Response
     */
    public function show(CicloFloracion $cicloFloracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CicloFloracion  $cicloFloracion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
          $data =Crypt::decrypt($id);

          $ciclo = CicloFloracion::find($data['id']);

          return view('plantaciones.actualizarCiclo',['ciclo'=>$ciclo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloFloracion  $cicloFloracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data =Crypt::decrypt($id);

        $ciclo = CicloFloracion::find($data['id']);

        $inicial = Carbon::parse($request->ini);
        $fin = Carbon::parse($request->fin);



        $diasfloracion = $fin->diffInDays($inicial);//obtiene los dias de la floracion

        $diapromedio = $diasfloracion / 2;

        $fechamedia = $inicial->addDays($diapromedio);


        $fechaestimada = $fechamedia->addMonths(9);//funciona correcto

        $fechainicio = Carbon::parse($request->ini);
        $valornuevo = $fechainicio->addDays($diapromedio);

        $realcosecha = Carbon::parse($request->cosecha);

        $edaddias = $realcosecha->diffInDays($valornuevo);
        $edadmeses =  $edaddias / 30.5;

        $porcentaje =$request->prematura / 100;

        $ciclo->año=$request->año;
        $ciclo->inicio_floracion =$request->ini;
        $ciclo->fin_floracion =$request->fin;
        $ciclo->dias_floracion = $diasfloracion;
        $ciclo->recomendada = $fechaestimada;
        $ciclo->daño =$request->daño;
        $ciclo->caida_prematura =$request->prematura;
        $ciclo->fecha_cosecha = $request->cosecha;
        $ciclo->edad_fruto =$edadmeses;
        $ciclo->produccion =$request->produccion;
        $ciclo->perdida_estimada =(($request->produccion*$porcentaje)/(1-$porcentaje));

        $plantacion=Plantacion::where('id',$ciclo->id_plantacion)->select('id_parcela')->first();
       //dd($plantacion->id_parcela);
        $parcela=Parcela::where('id',$plantacion->id_parcela)->select('ha')->first();
        //dd($parcela->ha);
        $superficie=$parcela->ha;
        $estimado = $request->produccion / $superficie;
        $ciclo->rendimiento_estimado = $estimado;
        $ciclo->id_plantacion = $ciclo->id_plantacion;
        $ciclo->save();

       // $ciclos = CicloFloracion::where('id_plantacion',$ciclo->id_plantacion)->get();

        return redirect('/mostrarciclo/'.$ciclo->id_plantacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CicloFloracion  $cicloFloracion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data =Crypt::decrypt($id);
        //dd($data);
        $ciclo = CicloFloracion::find($data['id']);
       // dd($ciclo->id_plantacion);
       // $id_plantacion = $ciclo->id_plantacion;
        CicloFloracion::destroy($data['id']);


       // $ciclos = CicloFloracion::where('id_plantacion',$id_plantacion)->get();

        return redirect('/mostrarciclo/'.$ciclo->id_plantacion);
    }
}
