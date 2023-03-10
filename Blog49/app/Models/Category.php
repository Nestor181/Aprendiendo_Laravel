<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

     //Relacion 1:m (V.49)
     public function posts(){
        return $this->hasMany(Post::class);
    }
}
