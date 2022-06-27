<?php

namespace Database\Seeders;

use App\Models\Comentario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentariosSeeder extends Seeder
{
    public function run()
    {
        Comentario::create([
            'user_id' => 1,
            'post_id' => 6,
            'comentario' => 'Más info, por favor'
        ]);

        Comentario::create([
            'user_id' => 3,
            'post_id' => 6,
            'comentario' => 'Interesante, me inscribiré'
        ]);

        Comentario::create([
            'user_id' => 2,
            'post_id' => 10,
            'comentario' => 'xD suele pasar'
        ]);
    }
}
