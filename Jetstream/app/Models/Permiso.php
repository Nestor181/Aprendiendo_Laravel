<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;
    //Referencia muchos a muchos con role (V.43)
    public function roles(){
        return $this->belongsToMany('App\Models\Role'); 
    }
}
