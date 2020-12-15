<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productor;
use App\Cargos;
use App\User;
use App\CicloFloracion;
use DB;
use Illuminate\Support\Facades\Auth;

class GayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        //
      
        return view('admin.index');
    }

   public function productores(){

    $productores = Productor::all();
     return view('productores.productores',['productores'=>$productores]);
   }

   public function cargos(){

    $cargos = Cargos::all();
     return view('admin.cargos',['cargos'=>$cargos]);
   }


   public function usuarios(){

    $users = User::all();
     return view('users.usuarios',['users'=>$users]);
   }

   public function dashboard(){
    return view('dashboard.home');
   }
   public function addYear(){
    return view('plantaciones.addYear');
   }
   public function graficaMapa(Request $request){

      $anio = $request->año;
     
        $sumas = DB::table('ciclo_floracions')->
        join('plantacions','ciclo_floracions.id_plantacion','plantacions.id')->
        join('parcelas','plantacions.id_parcela','parcelas.id')->
        join('municipios','parcelas.id_municipio','municipios.id')->
        join('estados','municipios.id_estado','estados.id')->
        whereYear('ciclo_floracions.created_at',$anio)
        ->groupBy('estados.nombre')
        ->select(DB::raw('sum(ciclo_floracions.produccion) as cantidad'),
          DB::raw('sum(parcelas.ha) as superficie'),
          DB::raw('estados.nombre as nombre'))->
       get();
      
    $total = CicloFloracion::sum('produccion');
       

    
      return view('dashboard.graficaMapa',['sumas'=>$sumas,'total'=>$total]);
   }

 
}
