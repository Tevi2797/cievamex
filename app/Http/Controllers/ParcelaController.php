<?php

namespace App\Http\Controllers;

use App\Parcela;
use App\Municipio;
use App\Productor;
use App\Riego;
use App\TipoSuelo;
use App\Plantacion;
use App\TipoPlantacion;
use App\Especie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
class ParcelaController extends Controller
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
    public function index(Request $request)
    {
        //
        $variable = $request->buscar;
        $parcelas = Parcela::join("municipios","municipios.id","=","parcelas.id_municipio")
            ->join("estados","estados.id","=","municipios.id_estado")
            ->join("productors","productors.id","=","parcelas.id_productor")
            ->select("parcelas.*")
            ->Where('productors.nombre','LIKE',"%".$variable."%")
            ->orWhere('productors.apellido_pat','LIKE',"%".$variable."%")
            ->orWhere('productors.apellido_mat','LIKE',"%".$variable."%")
            ->orWhere('estados.nombre','LIKE',"%".$variable."%")
            ->orWhere('municipios.nombre','LIKE',"%".$variable."%")->get();



        return view('parcelas.parcelas',['parcelas'=>$parcelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $municipios = Municipio::all();
        $productores = Productor::all();
        $riegos = Riego::all();
        $suelos = TipoSuelo::all();

        $tipos = TipoPlantacion::all();
        $especies = Especie::all();

        return view('parcelas.nuevaParcela',['municipios'=>$municipios,
            'productores'=>$productores,'riegos'=>$riegos,'suelos'=>$suelos,'tipos'=>$tipos,'especies'=>$especies]);
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
        $parcela = new Parcela();

        $parcela->latitud= $request->latitud;
        $parcela->longitud= $request->longitud;
        $parcela->altitud= $request->altitud;
        $parcela->ha= $request->ha;
        $parcela->pendiente= $request->pendiente;
        $parcela->localidad= $request->localidad;
        $parcela->id_tiposuelo= $request->suelo;
        $parcela->id_riego= $request->riego;
        $parcela->id_municipio= $request->municipio;
        $parcela->id_productor= $request->productor;

        $parcela->save();

        $id=$parcela->id;

        $plantacion = new Plantacion;
        $plantacion->cantidad =$request->cantidad;
        $plantacion->año =$request->año;
        $plantacion->id_especie =$request->especie;
        $plantacion->id_tipoplantacion =$request->tipo;
        $plantacion->id_parcela =$id;

        $plantacion->save();

        $parcelas = Parcela::all();

        return view('parcelas.parcelas',['parcelas'=>$parcelas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function show(Parcela $parcela)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=Crypt::decrypt($id);
        $parcela = Parcela::find($data['id']);
        $municipios = Municipio::all();
        $productores = Productor::all();
        $riegos = Riego::all();
        $suelos = TipoSuelo::all();

        return view('parcelas.actualizarParcela',['municipios'=>$municipios,
            'productores'=>$productores,'riegos'=>$riegos,'suelos'=>$suelos,
            'parcela'=>$parcela]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=Crypt::decrypt($id);
        $parcela = Parcela::find($data['id']);

        $parcela->latitud= $request->latitud;
        $parcela->longitud= $request->longitud;
        $parcela->altitud= $request->altitud;
        $parcela->ha= $request->ha;
        $parcela->pendiente= $request->pendiente;
        $parcela->localidad= $request->localidad;
        $parcela->id_tiposuelo= $request->suelo;
        $parcela->id_riego= $request->riego;
        $parcela->id_municipio= $request->municipio;
        $parcela->id_productor= $request->productor;

        $parcela->save();

        $parcelas = Parcela::all();

        return view('parcelas.parcelas',['parcelas'=>$parcelas]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Crypt::decrypt($id);
        Parcela::destroy($data['id']);

        $parcelas = Parcela::all();

        return view('parcelas.parcelas',['parcelas'=>$parcelas]);
    }
}
