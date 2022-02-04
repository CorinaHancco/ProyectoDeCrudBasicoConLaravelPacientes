<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use App\Models\comentario;

class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */ 
    protected $model = comentario::class;
    public function definition()
    {
        return [
            'email'=>$this->faker->email(),
            'descripcion'=>$this->faker->paragraph(),
            'estado'=>$this->faker->randomElement(['Activo','Inactivo']),
            'idPosts'=>$this->faker->randomDigit()
        ];

    }
}
