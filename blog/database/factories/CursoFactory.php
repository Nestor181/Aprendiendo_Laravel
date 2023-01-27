<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Curso::class;
    public function definition()
    {
        //En este apartado se llenan cada una de los indices con datos de prueba para hacer mas inserciones de ejemplo.
        return [
            'name' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(), 
            'categoria' => $this->faker->randomElement(['Desarrollo web','Diseño web'])
            
        ];
    }
}
