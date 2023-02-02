<?php
//En este archivo se crea para poder separar la logica de la vista para
//el archivo de aler.blade, de esta forma esta es la parte lógica que se le agrego. (V.29)


namespace App\View\Components;

use Illuminate\View\Component;

class Alert2 extends Component
{
    public $clases;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'info')
    {
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
        $this->clases = $clases;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert2');
    }
}
