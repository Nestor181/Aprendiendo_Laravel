@extends('layouts.plantilla')

@section('title', 'curso '.$curso->name)
    <H1>Bienvenido al curso {{$curso->name}}</H1>
    <a href="{{route('cursos.index')}}"> Volver a cursos </a> <!--Para poder regresar al link principal de bienvenido a curso-->
    <a href="{{toute('cursos.edit', $curso)}}"> Editar curso </a>
    <p><strong> Categoria: </strong> {{$curso->categoria}}</p> <!--Para mostrar la categoria del curso donde se encuentra-->
    <p>{{$curso->descripcion}}</p> <!--Muestra la descripcion del curso donde se encuenttra-->
@section('content')
    
@endsection


