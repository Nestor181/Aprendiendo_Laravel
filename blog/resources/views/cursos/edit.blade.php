@extends('layouts.plantilla')

@section('title', 'cursos edit')
    <H1>En esta página podrás editar un curso</H1>
    <form action="{{route('cursos.update')}}, $curso" method='Post'>  <!--Enviar la informacion al link de cursos.store con el metodo put-->
        @csrf   <!--Con esta directiva de blade agrega un token al momento de enviar el formulario-->
        @method('put') <!--Esta directiva sirve para que el formulario se envie con el metodo put aunque en el action se ponga el metodo post-->
        <label>
            Nombre:
            <br>
            <input type='text' name='name', value="{{old('name',$curso->name)}}"> <!--Se actualiza la value para que conserve toda la informacion que tenia antes y por si actualiza  otra pero se olvida de llenar un campo se guarde la nueva-->
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripcion:
            <br>
            <textarea name='descripcion' rows='S'>{{old('descripcion',$curso->descrpcion)}}</textarea>
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
            <input name='text' name='categoria' value="{{old('categoria',$curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar</button>
    </form>
@section('content')
    
@endsection