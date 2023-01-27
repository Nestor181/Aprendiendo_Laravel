@extends('layouts.plantilla')

@section('title', 'cursos')
    
@section('content')
    <h1>Bienvenido a la página cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a> <!--Con esta linea se hace referencia a la ruta a la que se quire redirigir con el nombre que se le asigno-->
    <ul>
        @foreach($cursos as $curso) 
            <li>
                <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
                <br>
                {{route('cursos.show', $curso)}}
            </li>

        @endforeach
    </ul>

    {{$cursos->links()}} <!--Se agrega esta linea para mostrar las paginas con los registros con opciones de cambiar la página.-->
@endsection
