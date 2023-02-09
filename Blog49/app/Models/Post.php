<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion 1:m inversa (V.49)
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion m:m (V.49)
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion 1:1 polimorfica (V.49)
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
