<?php

namespace App\Http\Controllers;//Definir el lugar donde se encuentra este archivo controller

use Illuminate\Http\Request;

class HomeController extends Controller //Aqui se ponen los metodos para administrar las rutas
{
    //Creando el método para conectar con la ruta de la url del archivo "web.php"
    public function __invoke(){//Este invocador solo sirve para administrar una unica ruta
        return view('home'); //Con esta funcion hacemos que nos retorne una vista de la carpeta "views"
    }
}