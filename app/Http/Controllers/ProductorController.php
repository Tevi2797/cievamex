<?php

namespace App\Http\Controllers;

use App\Productor;
use App\Estados;
use App\Cargos;
use App\Familia;
use App\Municipio;
use App\CaracteristicasMunicipio;
use App\ActividadEconomica;
use App\Direccion;
use App\ServiciosEquipamiento;
use App\CaractesticasCasa;
use App\Casa;
use App\Parcela;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;


class ProductorController extends Controller
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
        $variable = $request->buscar;
        $filas = $request->filas;
        if(!$filas){
            $filas=10;
        }

        $municipios = Municipio::all();
        $cantidad=Productor::join("direccions","direccions.id","=","id_direccion")
                    ->join("municipios","municipios.id","=","direccions.id_municipio")
                    ->join("estados","estados.id","=","municipios.id_estado")
                    ->select("productors.*")
                    ->Where('productors.nombre','LIKE',"%".$variable."%")
                    ->orWhere('productors.apellido_pat','LIKE',"%".$variable."%")
                    ->orWhere('productors.apellido_mat','LIKE',"%".$variable."%")
                    ->orWhere('estados.nombre','LIKE',"%".$variable."%")
                    ->orWhere('municipios.nombre','LIKE',"%".$variable."%")
                    ->count();
        $productores = Productor::join("direccions","direccions.id","=","id_direccion")
                        ->join("municipios","municipios.id","=","direccions.id_municipio")
                        ->join("estados","estados.id","=","municipios.id_estado")
                        ->select("productors.*")
                        ->Where('productors.nombre','LIKE',"%".$variable."%")
                        ->orWhere('productors.apellido_pat','LIKE',"%".$variable."%")
                        ->orWhere('productors.apellido_mat','LIKE',"%".$variable."%")
                        ->orWhere('estados.nombre','LIKE',"%".$variable."%")
                        ->orWhere('municipios.nombre','LIKE',"%".$variable."%")
                        ->paginate($filas);

       // dd($cantidad);
        return view('productores.productores',['productores'=>$productores,'municipios'=>$municipios,'cantidad'=>$cantidad,'filas'=>$filas,'buscar'=>$variable]);

    }

    public function municipios(Request $request){
        $municipios=Municipio::Where('id_estado',$request->id)->get();
        return $municipios;
    }
    public function editaractivad($id){
        $productor = Productor::find($id);
        $actividades = ActividadEconomica::all();

        return view('productores.updateActividad',['actividades'=>$actividades,
            'productor'=>$productor]);
    }

    public function updateactividad($id,Request $request){
            $productor = Productor::find($id);

            $productor->id_acteconomica = $request->select_act;

            $productor->save();

            return redirect('productores');
    }

    public function addFamilia(){
        $productores = Productor::all();

        return view('productores.productorFamilia',['productores'=>$productores]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $estados= Estados::all();
        $municipios= Municipio::all();
        $actividades = ActividadEconomica::all();
        return view('productores.nuevoProductor',['estados'=>$estados,'municipios'=>$municipios
            ,'actividades'=>$actividades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validaciones de la view nuevo productor
        $request->validate([
            'nacionalidad'=>'required',
            'nombre'=>'required',
            'apellido_pat'=>'required',
            'apellido_mat'=>'required',
            'nacimiento'=>'required',
            'sexo'=>'required',
            'select_act'=>'required',
            'select_edo'=>'required',
            'select_muni'=>'required',
            'localidad'=>'required'
        ],[
            'nombre.required'=>'El campo nombre es necesario.',
            'apellido_pat.required'=>'El campo apellido paterno es necesario.',
            'apellido_mat.required'=>'El campo apellido materno es necesario.',
            'edad.required'=>'El campo edad es necesario.',
            'edad.numeric'=>'El campo solo acepta números.',
            'sexo.required'=>'El campo sexo es necesario.',
            'select_act.required'=>'La actividad económica es necesaria.',
            'select_edo.required'=>'El campo estado es necesario',
            'select_muni.required'=>'El campo municipio es necesario',
            'localidad.required'=>'El campo localidad es necesario'
        ]);

        $caracteristicascasa = new CaractesticasCasa();
        $caracteristicascasa->save();
        $id_caraccasa=CaractesticasCasa::max('id');

        $serv = new ServiciosEquipamiento();
        $serv->save();
        $id_servequip=ServiciosEquipamiento::max('id');

        $direccion = new Direccion();
        $direccion->id_municipio = $request->select_muni;
        $direccion->localidad=$request->localidad;
        $direccion->ejido=$request->ejido;
        $direccion->colonia=$request->colonia;
        $direccion->calle=$request->calle;
        $direccion->numero=$request->numero;
        $direccion->referencias=$request->referencia;
        $direccion->save();
        $id_direccion=Direccion::max('id');

        $casa = new Casa();
        $casa->id_servequip = $id_servequip;
        $casa->id_caractcasa = $id_caraccasa;
        $casa->save();

        $id_casa=Casa::max('id');

        $productor = new Productor();
        $productor->nacionalidad=$request->nacionalidad;
        $productor->nombre=$request->nombre;
        $productor->apellido_pat=$request->apellido_pat;
        $productor->apellido_mat=$request->apellido_mat;
        $productor->nacimiento=$request->nacimiento;
        $productor->escolaridad=$request->escolaridad;
        $productor->sexo=$request->sexo;
        $productor->telefono=$request->telefono;
        $productor->seguro=$request->seguro;
        $productor->enfermedad=$request->enfermedad;        
        $productor->id_direccion= $id_direccion;
        $productor->id_acteconomica= $request->select_act;        
        $productor->id_estatuscasa=$id_casa;

        $productor->save();

        return redirect('productores');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productor  $productor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //
         $productor = Productor::find($id);
         $familias = Familia::where('id_productor', $id)->get();
         $id_produ= $productor->id_direccion;
         $direccion = Direccion::where('id',$id_produ)->first();

       // return redirect('imprimir/productor');
       $pdf=PDF::loadView('productores.estudioPdf',compact('productor','familias','direccion'));
       return $pdf->stream();

    }

    public function productoresPDF($id){
        $productor = Productor::find($id);
        $familias = Familia::where('id_productor', $id)->get();
        $id_produ= $productor->id_direccion;
        $direccion = Direccion::where('id',$id_produ)->first();
        $pdf=PDF::loadView('productores.estudioPdf',compact('productor','familias','direccion'));
       return $pdf->download();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productor  $productor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productor= Productor::find($id);
        $dire= $productor->id_direccion;
        $id_casa= $productor->id_estatuscasa;
        $direccion = Direccion::where('id','=', $dire)->first();
        $municipio=Municipio::find($direccion->id_municipio);
        $casa= Casa::find($id_casa)->first();
        $estados= Estados::all();
        $municipios= Municipio::all();
        $actividades = ActividadEconomica::all();
        return view('productores.actualizarProductor',['productor'=>$productor,
            'direccion'=>$direccion,'municipios'=>$municipios,
            'casa'=>$casa,'actividades'=>$actividades,
            'estados'=>$estados,'municipio'=>$municipio]);

    }

    //método para mostrar el socieconomico en lista de productores
    public function editSocioe($id){
        $productor= Productor::find($id);

        $id_casa= $productor->id_estatuscasa;
        $casa= Casa::find($id_casa)->first();
        $actividades = ActividadEconomica::all();
        return view('productores.estudioSocioeco',['productor'=>$productor,
             'casa'=>$casa,'actividades'=>$actividades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productor  $productor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //validaciones de la view nuevo productor
         $request->validate([
            'nombre'=>'required',
            'apellido_pat'=>'required',
            'apellido_mat'=>'required',
            'edad'=>'required|numeric',
            'sexo'=>'required',
            'select_act'=>'required',
            'select_edo'=>'required',
            'select_muni'=>'required',
            'localidad'=>'required'
        ],[
            'nombre.required'=>'El campo nombre es necesario.',
            'apellido_pat.required'=>'El campo apellido paterno es necesario.',
            'apellido_mat.required'=>'El campo apellido materno es necesario.',
            'edad.required'=>'El campo edad es necesario.',
            'edad.numeric'=>'El campo solo acepta números.',
            'sexo.required'=>'El campo sexo es necesario.',
            'select_act.required'=>'La actividad económica es necesaria.',
            'select_edo.required'=>'El campo estado es necesario',
            'select_muni.required'=>'El campo municipio es necesario',
            'localidad.required'=>'El campo localidad es necesario'
        ]);


        //
        $productor =Productor::find($id);

        $id_dire = $request->id_dire;
        $direccion = Direccion::find($id_dire);
        $direccion->calle = $request->calle;
        $direccion->numero = $request->numero;
        $direccion->colonia = $request->colonia;
        $direccion->id_municipio = $request->select_muni;
        $direccion->localidad = $request->localidad;
        $direccion->ejido = $request->ejido;
        $direccion->referencias = $request->referencia;

        $direccion->save();
        //return redirect('productores');


        $productor->nombre=$request->nombre;
        $productor->apellido_pat=$request->apellido_pat;
        $productor->apellido_mat=$request->apellido_mat;
        $productor->edad=$request->edad;
        $productor->sexo=$request->sexo;
        $productor->telefono=$request->telefono;
        $productor->escolaridad=$request->escolaridad;
        $productor->seguro=$request->seguro;


        $productor->save();

        return redirect('productores');



    }

    //método para actualizar el estudio socioeconomico
    public function updateSocioE(Request $request){

        $request->validate([
            'ingreso'=>'numeric',
            'gasto'=>'numeric',
        ],[
            'ingreso.numeric'=>'El campo solo acepta números, sin espacios en blanco.',
            'gasto.numeric'=>'El campo solo acepta números, sin espacios en blanco.',
        ]);


        $productor =Productor::find($request->id_prod);
        $id_casa= $request->id_casa;

        $id_cra = $request->id_cra;
        $caracteristicascasa = CaractesticasCasa::find($id_cra);

        $caracteristicascasa->plantas =$request->plantas;
        $caracteristicascasa->sala =$request->sala;
        $caracteristicascasa->comedor =$request->comedor;
        $caracteristicascasa->cocina=$request->cocina;
        $caracteristicascasa->cuartos =$request->cuartos;
        $caracteristicascasa->baños =$request->baños;
        $caracteristicascasa->patio =$request->patio;
        $caracteristicascasa->cochera =$request->cochera;

        $caracteristicascasa->save();
        $id_serv =$request->id_serv;
        $serv = ServiciosEquipamiento::find($id_serv);

        $serv->electricidad= $request->casa_luz;
        $serv->drenaje= $request->casa_drenaje;
        $serv->potable= $request->casa_potable;
        $serv->gas= $request->casa_gas;
        $serv->lavadora= $request->casa_lavadora;
        $serv->refrigerador= $request->casa_refrigerador;
        $serv->television= $request->casa_tv;
        $serv->telefono= $request->casa_tel;
        $serv->celular= $request->casa_cel;
        $serv->microondas= $request->casa_micro;
        $serv->radio= $request->casa_radio;
        $serv->dvd= $request->casa_dvd;
        $serv->computadora= $request->casa_computadora;
        $serv->internet= $request->casa_internet;
        $serv->automovil= $request->casa_auto;
        $serv->save();

        $casa= Casa::find($id_casa);
        $casa->estado=$request->estado_casa;
        $casa->material=$request->material;
        $casa->piso=$request->piso;
        $casa->techo=$request->techo;
        $casa->combustible=$request->combustible;
        $casa->save();

        $productor->jefe_familia=$request->jefe;
        $productor->estado_civil=$request->civil;
        $productor->ingreso=$request->ingreso;
        $productor->gasto=$request->gasto;
        $productor->save();

        if(url()->previous()== url('http://localhost:8000/productores/'.$request->id_prod.'/edit')){
            return redirect('/productores/'.$request->id_prod.'/edit');
        }else{
            return redirect('/productores');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productor  $productor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $productor = Productor::find($id);
        $id_direccion = $productor->id_direccion;
        $id_casa= $productor->id_estatuscasa;

        $casa= Casa::find($id_casa);

        $id_serv = $casa->id_servequip;
        $id_cra= $casa->id_caractcasa;
        $familias = Familia::where('id_productor',$id)->delete();

        Direccion::destroy($id_direccion);
        ServiciosEquipamiento::destroy($id_serv);
        CaractesticasCasa::destroy($id_cra);
        Casa::destroy($id_casa);
        Productor::destroy($id);

        return redirect('productores');
    }
}
