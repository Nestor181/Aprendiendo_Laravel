<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\curso;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       // $this->call(CursoSeeder::class); //Para utilizar todo lo escrito en el método Run del archivo CursoSeeder
        Curso::factory(50)->create();//Llamamos al archivo curso para crear 50 datos de prueba.
        User::factory(10)->create();
       
    }
}
