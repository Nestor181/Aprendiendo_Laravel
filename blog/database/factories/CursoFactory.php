<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\curso;
use Illuminate\Support\Str;

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
        $name = $this->faker->sentence();
        //En este apartado se llenan cada una de los indices con datos de prueba para hacer mas inserciones de ejemplo.
        return [
            'name' => $name,
            'slug' => Str::slug($name,'_'), //Hace que el nombre que se le pase lo pase a minusculas y los espacios los separe con un guion.(Video 23)
            'descripcion' => $this->faker->paragraph(), 
            'categoria' => $this->faker->randomElement(['Desarrollo web','Diseño web'])

        ];
    }
}
