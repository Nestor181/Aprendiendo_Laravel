<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    //Relacion m:m polimorfica inversa (V.46)
    public function posts(){
        return $this->morphByMany('App\Models\Post','taggable');
    }

    //Relacion m:m polimorfica inversa (V.46)
    public function videos(){
        return $this->morphByMany('App\Models\Video','taggable');
    }
}
