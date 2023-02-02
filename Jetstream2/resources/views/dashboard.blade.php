<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!--Al agregar esta nuevo slot con el type con diferentes nombres de slot para diferentes casos en el switch de alert.blade-->
            <x-alert type="info">
                <!--De esta nueva forma se agrega el texto en forma de un nuevo slot llamado "title"-->
                <x-slot name='title'>
                    Titulo que se le pasara al alert.blade como slot
                </x-slot>
                    <p>Texto que se imprime con la variable "slot"</p> <!--El texto que se escriba en estas etiquetas "x-alert" se imprimiran en la varibale "$slot"-->
            </x-alert>

        </div>
    </div>
</x-app-layout>
