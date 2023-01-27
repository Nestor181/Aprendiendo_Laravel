<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        
            "name" => "required|max:20",
            "descripcion" => "required|min:10",
            "categoria" => "required"
          
        ];
    }

    public function atributes(){
        return [
            "name" => "nombre",  //Para que el atributo name pase a nombre cuando se muestre.
        ];
    }

    public function messages(){
        return[
            "descrcipcion.requiered" => "Debe ingresar una descripciond el curso",  //Esto se pone si se quiere personalizar los mensajes de validacion, si no es asi se puede usar los mensajes que tiene laravel predeterminados.
        ];
    }
}
