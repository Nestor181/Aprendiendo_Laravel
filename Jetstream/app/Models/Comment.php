<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    //Relacion polimorfica
    public function commentable(){
        return $this->morphTo();  //Indicamos que esta relacion es de tipo polimorfica (V.45)
    }

    //Relacion 1:m inversa con users
    public function users(){
        return $this->belongsTo('App\Model\User');
    }


}
