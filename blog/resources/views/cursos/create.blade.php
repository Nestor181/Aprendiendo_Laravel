@extends('layouts.plantilla')

@section('title', 'cursos create')
    <H1>En esta página podrás crear un curso</H1>
    <a href="{{route('cursos.index')}}">Volver a página principal</a>
    <form action="{{route('cursos.store')}}" method='POST'>  <!--Enviar la informacion al link de cursos.store con el metodo post-->
        @csrf   <!--Con esta directiva de blade agrega un token al momento de enviar el formulario-->
        <label>
            Nombre:
            <br>
            <input type='text' name='name' value="{{old('name')}}">
        </label>

        <!--En caso de que se encuentre con un error al momento de llenar el formulario en el apartado name, arrojara un mensaje de error-->
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripcion:
            <br>
            <textarea name='descripcion' rows='5'>{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type='text' name='categoria' value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar</button>
    </form>
@section('content')
    
@endsection
