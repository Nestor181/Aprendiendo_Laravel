<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    
    //Relacion polimorfica (V.49)
    public function imageable(){
        return $this->morphTo();
    }
}
