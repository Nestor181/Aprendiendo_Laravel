<?php

use App\Http\Controllers\ContactanosController;
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
Route::get('/', HomeController::class)->name('Home');

//Sin usar controlador
/*Route::get('/', function () { 
    return view('welcome');
});*/

//Para esta parte se creará un controlador para las tres rutas
//Primera forma, cada ruta por separado
/*Route::get('cursos', [CursoController::class, 'index']);

Route::get("cursos/create", [ CursoController::class, 'create' ] );

Route::get('cursos/{curso}', [ CursoController::class, 'show' ] );  //La parte de "{curso}" es donde se envía la url como variable
*/


//Segunda forma, se crea un grupo de rutas que contengan el mismo controlador
/*Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index') ->name('cursos.index'); //Se agregan los nombres para indentificar las rutas.

    Route::get("cursos/create", 'create' ) ->name('cursos.create');

    Route::post('cursos', 'store' )->name('cursos.store');

    Route::get('cursos/{id}', 'show' )->name('cursos.show');

    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');

    Route::put('cursos/{curso}', 'update')->name('cursos.update'); //Se utiliza el método put porque se recomienda este cuando se quiere actualizar información.

    Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');  //Método para eliminar registros en la base de datos
});*/

Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');  //Esta línea ahorra el tener que poner tantas url para el mismo controlador. (Video 22)
                                                                    //El metodo names('NameURL') es para especificar el nombre para nuestras rutas internamente.(Video 22)
                                                                    //El metodo parameters(['NameURL'=>'NameEnviar']) para indicar como queremos que se llamen las variables a enviar. (Video 22)

//Pasar por la url dos vaiables
/*Route::get('curso/{curso}/{var2?}', function ($curso,$var2=null) { //El signo "?" en la segunda variable indica que la variable es opcional
    //if que indica si esta activa la segunda variable o no
    if( $var2 ){ return "Url con dos variables: $curso y $var2"; }
    else{
        return "Url con solo la variable $curso";
    }
});*/

Route::view('nosotros', 'nosotros')->name('nosotros'); //Este método sirve para mostrar contenido estático,solo mostrar una vista. 
Route::get('contactanos', [ContactanosController::class, "index"] )->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, "store"])->name('contactanos.store');