@extends('layouts.plantilla')

@section('title', 'cursos edit')
@section('content')
    <H1><strong> En esta página podrás editar un curso </strong></H1>
    <a href="{{route('cursos.index')}}">Volver a página cursos</a>
    <br>
    <a href="{{route('cursos.show',$curso)}}">Volver a atrás</a>

    <form action="{{route('cursos.update', $curso)}}" method='Post'>  <!--Enviar la informacion al link de cursos.store con el metodo put-->
        @csrf   <!--Con esta directiva de blade agrega un token al momento de enviar el formulario-->
        @method('put') <!--Esta directiva sirve para que el formulario se envie con el metodo put aunque en el action se ponga el metodo post-->
        <label>
            <br>
            <strong> Nombre: </strong>
            <br>
            <input type='text' name='name', value="{{old('name',$curso->name)}}"> <!--Se actualiza la value para que conserve toda la informacion que tenia antes y por si actualiza  otra pero se olvida de llenar un campo se guarde la nueva-->
        </label>
        @error('name')
            <br>
            <p class="error"><strong><small>*{{$message}}</small></strong></p>  
            <br>
        @enderror

        <br>
        <label>
            <strong> Descripcion: </strong>
            <br>
            <textarea name='descripcion' rows='5'>{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <p class="error"><strong><small>*{{$message}}</small></strong></p>  
            <br>
        @enderror

        <br>
        <label>
            <strong> Categoria: </strong>
            <br>
            <input name='categoria' value="{{old('categoria',$curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
            <p class="error"><strong><small>*{{$message}}</small></strong></p>  
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar</button>
    </form>

    
@endsection