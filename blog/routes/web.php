<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

//Utilando el controlador para trabajar con la url
Route::get('/', HomeController::class);

//Sin usar controlador
/*Route::get('/', function () { 
    return view('welcome');
});*/

//Para esta parte se creará un controlador para las tres rutas
//Primera forma, cada ruta por separado
Route::get('cursos', [CursoController::class, 'index']);

Route::get("cursos/create", [ CursoController::class, 'create' ] );

Route::get('cursos/{curso}', [ CursoController::class, 'show' ] );  //La parte de "{curso}" es donde se envía la url como variable


//Segunda forma, se crea un grupo de rutas que contengan el mismo controlador
Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');

    Route::get("cursos/create", 'create' );

    Route::get('cursos/{curso}', 'show' );
});



//Pasar por la url dos vaiables
/*Route::get('curso/{curso}/{var2?}', function ($curso,$var2=null) { //El signo "?" en la segunda variable indica que la variable es opcional
    //if que indica si esta activa la segunda variable o no
    if( $var2 ){ return "Url con dos variables: $curso y $var2"; }
    else{
        return "Url con solo la variable $curso";
    }
});*/

