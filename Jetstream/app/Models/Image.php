<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $guarded = []; //Esta linea permite la asignacion masiva (V.44)
    
    use HasFactory;

    public function imageable(){
        return $this->morphTo(); //Con este se le indica que se usara esta tabla 'images' para realizar una relacion polimorfica (V.44)
    }
}
