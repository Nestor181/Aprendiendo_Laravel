<!--En este archivo se creo para poder separa la vista de la logica del archivo alert.blade,
 de esta forma este archivo corresponde a la parte de la vista. (V.29)-->

<div class="border-l-4 p-4" {{$clases}} role="alert">
    <h1 class="font-bold">{{$title}}</h1> <!--De esta segunda forma se recibe el texto en forma de slot con el name definido como 'title'(V.29)-->
    {{$slot}} <!--Esta variable sirve para poder imprimir donde se use la etiquete "x-alert"(V.29)-->
</div>