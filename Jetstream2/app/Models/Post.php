<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    //Relacion 1:1 polimorfica (V.44)
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //Relacion 1:m polimorfica (V.45)
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable'); //Esta line indica que se relacuionara con el modelo comment y 
                                                                      //el segundo parametro indca la funcion que pusimos para indicar 
                                                                      //que es un modelo polimorfico.
    }
}
