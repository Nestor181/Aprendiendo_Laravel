<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(100)->create();

        //Des esta forma se le asigna una imagen cada vez que se crea un post, al igual que se
        //le asigna el id y el tipo a cada una de esas imagenes como se le piden en la tabla
        foreach($posts as $post){
            Images::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);
        }
        
    }
}
