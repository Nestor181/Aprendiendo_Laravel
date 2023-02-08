<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa (V.42)
    public function user(){
        return $this->belongsTo('App\Models\User');  //Metodo para recuperar la coleccion de post que pertenecen a este usurio(V.42)
    }
}

