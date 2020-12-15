<?php

namespace App\Http\Controllers;

use App\Municipio;
use Illuminate\Http\Request;
use App\Estados;
use App\CaracteristicasMunicipio;
use Illuminate\Support\Facades\Auth;
class MunicipioController extends Controller
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
    public function index(Request $request)
    {
        //
        $variable = $request->buscar;
        $municipios = Municipio::Where('nombre','LIKE',"%".$variable."%")->take(10)->get();

        return view('municipios.municipios',['municipios'=>$municipios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $estados = Estados::all();

        return view('municipios.nuevoMunicipio',['estados'=>$estados]);
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
        $caracteristicasmunicipio= new CaracteristicasMunicipio();
        $caracteristicasmunicipio->escuelas=$request->edu_pub;
        $caracteristicasmunicipio->salud=$request->ce_salud;
        $caracteristicasmunicipio->pavimento=$request->pavimento;
        $caracteristicasmunicipio->alumbrado=$request->publico;
        $caracteristicasmunicipio->transporte=$request->transporte;
        $caracteristicasmunicipio->red_movil=$request->movil;
        $caracteristicasmunicipio->potable=$request->potable;
        $caracteristicasmunicipio->alcantarillado=$request->alcantarillado;
        $caracteristicasmunicipio->drenaje=$request->drenaje;
        $caracteristicasmunicipio->electricidad=$request->electricidad;
        $caracteristicasmunicipio->residuos=$request->residuos;
        $caracteristicasmunicipio->gas=$request->gas;
        $caracteristicasmunicipio->seguridad=$request->seguridad;
        $caracteristicasmunicipio->abastos=$request->abastos;

        $caracteristicasmunicipio->save();

        $id_caracmuni=CaracteristicasMunicipio::max('id');

        $municipio = new Municipio();
        $municipio->nombre=$request->municipio;
        $municipio->id_estado=$request->estado;
        $municipio->id_caracmunicipio=$id_caracmuni;

        $municipio->save();

        $municipios = Municipio::all();
        return view('municipios.municipios',['municipios'=>$municipios]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function show(Municipio $municipio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $municipio=Municipio::find($id);
        $estados =Estados::all();
        $caracteristica =CaracteristicasMunicipio::where('id','=',$id)->first();
        return view('municipios.actualizarMunicipio',
            ['municipio'=>$municipio,'caracteristica'=>$caracteristica
            ,'estados'=>$estados]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $caracteristicasmunicipio=CaracteristicasMunicipio::find($id);
        $caracteristicasmunicipio->escuelas=$request->edu_pub;
        $caracteristicasmunicipio->salud=$request->ce_salud;
        $caracteristicasmunicipio->pavimento=$request->pavimento;
        $caracteristicasmunicipio->alumbrado=$request->publico;
        $caracteristicasmunicipio->transporte=$request->transporte;
        $caracteristicasmunicipio->red_movil=$request->movil;
        $caracteristicasmunicipio->potable=$request->potable;
        $caracteristicasmunicipio->alcantarillado=$request->alcantarillado;
        $caracteristicasmunicipio->drenaje=$request->drenaje;
        $caracteristicasmunicipio->electricidad=$request->electricidad;
        $caracteristicasmunicipio->residuos=$request->residuos;
        $caracteristicasmunicipio->gas=$request->gas;
        $caracteristicasmunicipio->seguridad=$request->seguridad;
        $caracteristicasmunicipio->abastos=$request->abastos;

        $caracteristicasmunicipio->save();

        $id_caracmuni=CaracteristicasMunicipio::max('id');

        $municipio =Municipio::find($id);
        $municipio->nombre=$request->municipio;
        $municipio->id_estado=$request->estado;
        $municipio->id_caracmunicipio=$id_caracmuni;

        $municipio->save();

        $municipios = Municipio::all();
        return view('municipios.municipios',['municipios'=>$municipios]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Municipio::destroy($id);
        return redirect('municipios');
    }
}
