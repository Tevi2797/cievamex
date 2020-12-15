<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Municipio;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('alertas', function () {
    return view('dashboard.alerta');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cargos','CargosController');
Route::resource('admin','GayaController');
Route::get('/dashboard', 'GayaController@dashboard')->name('dashboard');
Route::get('/addFamilia', 'ProductorController@addFamilia')->name('addFamilia');
Route::get('/mostrar/{productor_id}', 'FamiliaController@mostrar')->name('mostrarview');
Route::get('/familia/{productor_id}', 'FamiliaController@listaFamilia')->name('lista.familia');

Route::resource('usuarios','UsersController');
Route::resource('productores','ProductorController');
Route::resource('municipios','MunicipioController');
Route::resource('actividades','ActividadEconomicaController');
Route::resource('familiares','FamiliaController');
Route::resource('casas','CasaController');
Route::resource('riegos','RiegoController');
Route::resource('suelos','TipoSueloController');
Route::resource('parcelas','ParcelaController');
Route::resource('enfermedades','EnferPlantaController');
Route::resource('manejospla','ManejoPlagaController');
Route::resource('plagas','PlagaController');
Route::resource('manejosenfer','ManejoEnfermedadController');
Route::resource('fertilizantes','FertilizanteController');
Route::resource('tutores','TutorController');
Route::resource('asociados','CultivoAsociadoController');
Route::resource('tipos','TipoPlantacionController');
Route::resource('especies','EspecieController');
Route::resource('ciclos','CicloFloracionController');
Route::resource('plantaciones','PlantacionController');
Route::resource('visitas','VisitaController');
Route::resource('enfermedadesplantacion','EnfermedadesPlantacionesController');
Route::resource('plantacionesmanejo','PlantacionManejoEnfermedadController');
Route::resource('plagasplantaciones','PlantacionesPlagasController');
Route::resource('plagasmanejo','PlantacionManejoPlagaController');
Route::resource('plantferti','PlantacionFertilizanteController');
Route::resource('planttutor','PlantacionTutorController');
Route::resource('plantasociado','PlantacionAsociadoController');


Route::get('/editar/{user_id}','UsersController@edit')->name('edit.usuario');

Route::get('/editaract/{acti_id}','ProductorController@editaractivad')->name('edit.actprodu');
Route::get('/updateact/{actiprodu_id}','ProductorController@updateactividad')->name('update.actprodu');
Route::get('/editarC/{cargo_id}','CargosController@edit')->name('edit.cargos');
Route::get('/eliminar/{user_id}','UsersController@destroy')->name('destroy.usuario');
Route::get('/reportevisitascla/','VisitaController@reportes')->name('visitas.reporte');
Route::get('/reportevisitas/','VisitaController@visitasReporte')->name('visitas.mostrar');
Route::get('/ver/{enfer_id}','EnfermedadesPlantacionesController@ver')->name('enfermedades.ver');
Route::get('/verManejosenfermedades/{manejo_id}','PlantacionManejoEnfermedadController@ver')->name('manejosenfer.ver');
Route::get('/verplagas/{plaga_id}','PlantacionesPlagasController@ver')->name('plagasplantaciones.ver');
Route::get('/vermanejoplagas/{plaga_id}','PlantacionManejoPlagaController@ver')->name('plagasmanejo.ver');
Route::get('/verfertilizantes/{fertilizante_id}','PlantacionFertilizanteController@ver')->name('plantferti.ver');
Route::get('/vertutores/{tutor_id}','PlantacionTutorController@ver')->name('planttutor.ver');
Route::get('/verasociados/{tutor_id}','PlantacionAsociadoController@ver')->name('plantasociado.ver');

Route::get('/crear/{plantacion_id}','PlantacionController@nuevo')->name('plantaciones.nuevo');
Route::get('/mostrarplantacion/{plantacion_id}','PlantacionController@mostrarplantacion')->name('plantaciones.mostrar');
Route::get('/crearciclo/{plantacion_id}','CicloFloracionController@nuevoCiclo')->name('ciclos.nuevociclo');
Route::get('/mostrarciclo/{plantacion_id}','CicloFloracionController@mostrarCiclos')->name('ciclos.mostrarciclo');
Route::get('/crearvisita/{visita_id}','VisitaController@nuevaVisita')->name('visitas.nuevaVisita');
Route::get('/mostrarvisita/{visita_id}','VisitaController@mostrarVisitas')->name('visitas.mostrarVisitas');
Route::get('/plantacionReporte/{plantacion_id}','PlantacionController@estado')->name('plantaciones.estado');

Route::get('/eliminarC/{user_id}','CargosController@destroy')->name('destroy.cargos');
Route::get('/eliminarP/{productor_id}','ProductorController@destroy')->name('produ.destroy');
Route::get('/eliminarFam/{familiar_id}','FamiliaController@destroy')->name('fam.destroy');
Route::get('/eliminarMuni/{muni_id}','MunicipioController@destroy')->name('destroy.muni');
Route::get('/eliminarSuelo/{suelo_id}','TipoSueloController@destroy')->name('destroy.suelo');
Route::get('/eliminarRiego/{riego_id}','RiegoController@destroy')->name('destroy.riego');
Route::get('/eliminarParcela/{parcela_id}','ParcelaController@destroy')->name('destroy.parcela');
Route::get('/eliminarActividad/{actividad_id}','ActividadEconomicaController@destroy')->name('destroy.actividad');
Route::get('/eliminarEnferPlanta/{enfer_id}','EnferPlantaController@destroy')->name('destroy.enfermedad');
Route::get('/eliminarManejoPla/{mapla_id}','ManejoPlagaController@destroy')->name('destroy.manejospla');
Route::get('/eliminarPlaga/{plaga_id}','PlagaController@destroy')->name('destroy.plaga');
Route::get('/eliminarManejoEnfer/{maenfer_id}','ManejoEnfermedadController@destroy')->name('destroy.manejosenfer');
Route::get('/eliminarFertilizante/{ferti_id}','FertilizanteController@destroy')->name('destroy.fertilizante');
Route::get('/eliminarTutor/{tutor_id}','TutorController@destroy')->name('destroy.tutor');
Route::get('/eliminarAsociado/{asociado_id}','CultivoAsociadoController@destroy')->name('destroy.asociado');
Route::get('/eliminarTipo/{tipo_id}','TipoPlantacionController@destroy')->name('destroy.tipos');
Route::get('/eliminarEspecie/{especie_id}','EspecieController@destroy')->name('destroy.especie');
Route::get('/eliminarCiclo/{ciclo_id}','CicloFloracionController@destroy')->name('destroy.ciclo');
Route::get('/eliminarPlantacion/{plantacion_id}','PlantacionController@destroy')->name('destroy.plantacion');
Route::get('/eliminarVisita/{visita_id}','VisitaController@destroy')->name('destroy.visita');
Route::get('/eliminarlista/{lista_id}','EnfermedadesPlantacionesController@destroy')->name('destroy.listaenfermedad');
Route::get('/eliminarlistamanejo/{lista_id}','PlantacionManejoEnfermedadController@destroy')->name('destroy.listamanejoenfermedad');
Route::get('/eliminarlistaplaga/{plaga_id}','PlantacionesPlagasController@destroy')->name('destroy.listaplaga');
Route::get('/eliminarlistamanejoplaga/{plaga_id}','PlantacionManejoPlagaController@destroy')->name('destroy.plagasmanejo');
Route::get('/eliminarfertilizantes/{fertilizante_id}','PlantacionFertilizanteController@destroy')->name('destroy.plantferti');
Route::get('/eliminartutorplanta/{tutor_id}','PlantacionTutorController@destroy')->name('destroy.planttutor');
Route::get('/eliminarasociadoplanta/{asociado_id}','PlantacionAsociadoController@destroy')->name('destroy.plantasociado');



Route::get('/index', 'GayaController@index')->name('index');
Route::get('/graficaMapa', 'GayaController@graficaMapa')->name('mapa.grafica');
Route::get('/addMapa', 'GayaController@addYear')->name('mapa.addYear');
Route::get('/seguimiento/{parcela_id}', 'PlantacionController@graficar')->name('plantaciones.graficar');

Route::get('/select/edo/{id}','ProductorController@municipios')->name('municipios');
Route::post('/update/socioe','ProductorController@updateSocioE')->name('productores.updateSocioE');
Route::get('/socioe/{id}/edit','ProductorController@editSocioe')->name('productores.socioe');
Route::get('/productor/pdf/{id}','ProductorController@productoresPDF')->name('productores.PDF');

