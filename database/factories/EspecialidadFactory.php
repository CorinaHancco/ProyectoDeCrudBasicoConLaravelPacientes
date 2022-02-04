<?php

namespace Database\Factories;

use App\Models\Especialidad;
use Illuminate\Database\Eloquent\Factories\Factory;

class EspecialidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Especialidad::class;
    public function definition()
    {
        return [
            'descripcion'=>$this->faker->paragraph(),
            'estado'=>$this->faker->randomElement(['Activo','Inactivo'])
        ];
    }
}
