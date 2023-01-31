@extends('layouts.plantilla') <!--Con estas ectensiones estamos usando las platillas de laravel con extension ".blade" ubicada en la carpeta "views"-->

@section('title', 'Contactanos')

@section('content')
    <H1><strong> Dejanos un mensaje </strong></H1>

    <form action="{{route('contactanos.index')}}" method="POST">
        @csrf
        <label for="">
            <strong>Nombre:</strong>
            <br>
            <input type="text" name="name">
        </label>
        <br>

        @error('name')
            <p class="error"><strong><small>*{{$message}}</small></strong></p>     
        @enderror
        <br>

        <label for="">
            <strong>Correo:</strong>
            <br>
            <input type="text" name="correo">
        </label>
        <br>

        @error('correo')
            <p class="error"><strong><small>*{{$message}}</small></strong></p>     
        @enderror
        <br>

        <label for="">
            <strong>Mensaje:</strong>
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        <br>

        @error('mensaje')
            <p class="error"><strong><small>*{{$message}}</small></strong></p>    
        @enderror
        <br>

        <button type="submit"><strong> Enviar mensaje </strong></button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
        
    @endif
@endsection
