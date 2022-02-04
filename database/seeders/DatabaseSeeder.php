<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\comentario;
use App\Models\Especialidad;

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
     /*   $comentario1 = new comentario();
        $comentario1->email='f@gmail.com';
        $comentario1->descripcion='kabdshfb';
        $comentario1->estado='activo';
        $comentario1->idPosts=1;
        $comentario1->save();
        */
     // comentario::factory(50)->create();
        Especialidad::factory(50)->create();
    }
}
