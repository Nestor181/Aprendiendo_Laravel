@extends('layouts.plantilla')

@section('title', 'cursos create')
@section('content')
    <H1> <strong> En esta página podrás crear un curso </strong></H1>
    <a href="{{route('cursos.index')}}">Volver a atras</a>
    <form action="{{route('cursos.store')}}" method='POST'>  <!--Enviar la informacion al link de cursos.store con el metodo post-->
        @csrf   <!--Con esta directiva de blade agrega un token al momento de enviar el formulario-->
        <br>
        <label>
            <strong> Nombre: </strong>
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
            <strong> Descripcion: </strong>
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
            <strong> Categoria: </strong>
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

    
@endsection
