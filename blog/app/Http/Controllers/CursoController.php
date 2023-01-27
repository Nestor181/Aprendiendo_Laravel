<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
//Se agrega que se quire utilizar el store curso para las validaciones.

use App\Models\curso;
class CursoController extends Controller
{
    public function index(){//Este método muestra la página principal, tiene este nombre por convención
       // $curso = curso::all();  //Se agrega esta linea para extraer todos los datos de la tabal curso.
       $cursos = Curso::orderBy('id', 'desc')->paginate(); //De esta forma obtenemos los registros de una forma paginada para así mostrar los datos por paginas.
        return view('cursos.index', compact('cursos') ); //Para indicar que esta en una carpeta se utiliza el separador "."
                                                        //Se utiliza compact para enviar la variable al html.
    }
    public function create(){//Este método muestra el formulario para crear cosas, tiene este nombre por convención
        return view('cursos.create');
    }
    //Este método se encarga de adquirir toda la informacion enviada desde el formulario.
    public function store(StoreCurso $request){

        //De esta forma ya al obtener toda la informacion del formulario, se agrega un nuevo registro de curso con la informacion del formulario.
        $curso = new Curso();

        $curso->name= $request->name;
        $curso->categoria= $request->categoria;
        $curso->descripcion= $request->descripcion;

        $curso->save();

        //$curso = Curso::create($request->all()); //Se creara un nuevo curso con los datos que coincidan con request.

        return redirect()->route('cursos.show', $curso->id);  //Redirige al link del objeto creado.

    }
    public function show( $id ){//Este método muestra un elemento en particular, tiene este nombre por convención
       // return view('cursos.show', ['curso' => $curso]);//Se envia la variable curso con un array [nombreDeVar, var]
        $curso=Curso::find($id); //buscar el curso por su id.
        return view('cursos.show', compact('curso')); //esta es otra forma de enviar la variable
    }

    public function edit(Curso $id){ //De esta forma se hace que se obtenga el objeto de cursos del registro con la id nueva.
        return view( 'cursos.edit', compact('id') );

    }

    public function update(Request $request, curso $curso){ //La variable $curso decimos que es una instancia de curso.
       
        $request->validate([
            "name" => "required",
            "descripcion" => "required",
            "categoria" => "required"
        ]);

               
        //Actualizamos el curso con la informacion obtenida desde el formulario de update.
       $curso -> name = $request -> name;
        $curso -> categoria = $request -> categoria;
        $curso -> descripcion = $request -> desripcion;

        $curso -> save();

        //$curso->update($request->all()); //Se actualiza todos los registos con la informacion del formulario masivamente.


        return redirect()->route('cursos.show', $curso->id);


    }
    //Eliminar un registro en la base de datos y redirigir a la pagina principal.
    public function destroy(Curso $curso){
        $curso -> delete();

        return redirect()->route('cursos.index');

    }
}