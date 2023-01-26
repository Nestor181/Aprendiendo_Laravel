@extends('layouts.plantilla')

@section('title', 'cursos')
    
@section('content')
    <H1>Bienvenido a la página cursos</H1>
    <a href="{{route(cursos.create)}}">Crear curso </a> <!--Con esta linea se hace referencia a la ruta a la que se quire redirigir con el nombre que se le asigno-->
    <ul>
        @foreach($curso as $curso) 
            <li>
                <a href="{{route('cursos.show', $curso-id)}}">{{$curso->name}}</a>
            </li>

        @foreach
    </ul>

    {{$curso->links}} <!--Se agrega esta linea para mostrar las paginas con los registros con opciones de cambiar la página.-->
@endsection
