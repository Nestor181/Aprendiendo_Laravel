<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){//Este método muestra la página principal, tiene este nombre por convención
        return view('cursos.index'); //Para indicar que esta en una carpeta se utiliza el separador "."
    }
    public function create(){//Este método muestra el formulario para crear cosas, tiene este nombre por convención
        return view('cursos.create');
    }
    public function show( $curso ){//Este método muestra un elemento en particular, tiene este nombre por convención
        return view('cursos.show', ['curso' => $curso]);//Se envia la variable curso con un array [nombreDeVar, var]
        //return view('cursos.show', compact('curso')); esta es otra forma de enviar la variable
    }
}