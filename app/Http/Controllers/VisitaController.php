<?php

namespace App\Http\Controllers;

use App\Visita;
use App\Parcela;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
class VisitaController extends Controller
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
    }
    public function nuevaVisita($id){
        
        $parcela = Parcela::find($id);

        return view('parcelas.nuevaVisita',['parcela'=>$parcela]);

    }
    public function mostrarVisitas($id){
        
        $visitas = Visita::where('id_parcela',$id)->get();

        return view('parcelas.visitas',['visitas'=>$visitas]);
    }

    public function visitasReporte(){
        
        return view('parcelas.soloVisitas');
    }
    public function reportes(Request $request){

        $valor = $request->año;
        $id_parcela =$request->id;

        $visitas = Visita::whereYear('created_at', $valor)
                         ->get();

        $parcelas = Parcela::all();

       
        $view = view('parcelas.reporteVisitas',compact('visitas','parcelas'));

        
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream();
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
        $visita = new Visita;
        $visita->fecha =$request->fecha;
        $visita->actividad =$request->actividad;
        $visita->descripcion =$request->descripcion;
        $visita->id_parcela =$request->id;

        $visita->save();

        $visitas = Visita::where('id_parcela',$request->id)->get();

        return view('parcelas.visitas',['visitas'=>$visitas]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function show(Visita $visita)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=Crypt::decrypt($id);

        $visita = Visita::find($data['id']);

        return view('parcelas.actualizarVisita',['visita'=>$visita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=Crypt::decrypt($id);

        $visita = Visita::find($data['id']);

        $visita->fecha =$request->fecha;
        $visita->actividad =$request->actividad;
        $visita->descripcion =$request->descripcion;
   

        $visita->save();

        $visitas = Visita::where('id_parcela',$visita->id_parcela)->get();

        return view('parcelas.visitas',['visitas'=>$visitas]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Crypt::decrypt($id);
        $visita = Visita::find($data['id']);
        $parcela = $visita->id_parcela;
        Visita::destroy($data['id']);
        $visitas = Visita::where('id_parcela',$parcela)->get();
        return view('parcelas.visitas',['visitas'=>$visitas]);

    }
}
