
@props(['type']) <!--Este método sirve para recibir los atributos que queramos recirbir del dashboard(V.29)-->

<!--Este bloque de php sirve para poder recibir del slot dashoard y hacer en este caso un bloque de codigo en php para defirnir el estilo de la caje de la alerta(V.29)-->
@php
    switch ($type){
        case 'info':
            $clases = "bg-purple-100 border-black-500 text-orange-700";
            break;

        case 'danger':
            $clases = "bg-orange-100 border-orange-500 text-orange-700";
            break;
        
        default:
            $clases = "bg-red-100 border-orange-500 text-orange-700";
            break;
    }
@endphp

<div class="border-l-4 p-4" {{$clases}} role="alert">
  <h1 class="font-bold">{{$title}}</h1> <!--De esta segunda forma se recibe el texto en forma de slot con el name definido como 'title'(V.29)-->
  {{$slot}} <!--Esta variable sirve para poder imprimir donde se use la etiquete "x-alert"(V.29)-->
</div>