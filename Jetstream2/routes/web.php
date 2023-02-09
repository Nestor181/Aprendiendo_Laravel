<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Creando middlewares

Route::get('prueba', function(){
    return "Haz accedido correctamente a este link";
})->middleware(['auth:sanctum','age']); //Asi se asigna el middleware 'age' a esta ruta

Route::get('no_autorizado', function () {
    return "Usted no es mayor de edad";
});
