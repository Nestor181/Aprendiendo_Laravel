<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model 
{
    use HasFactory;

    //protected $table = 'users'; //con esta linea hace que el modelo se encargue de administrar la tabla users

    //protected $fillable = ['name', 'descripcion', 'categoria'];
    protected $guarded = ['status']; //Ignora el campo status y guarda todos los demas campos.

    public function getRouteKeyName()
    {
        return 'slug'; //Lo obtenemos del archivo de Model buscando RouteKey, lo pasamos para aca y lo modificamos para que muestre el slug.(Video 23)
    }

}
