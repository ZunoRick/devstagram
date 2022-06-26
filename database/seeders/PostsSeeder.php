<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'titulo' => 'Celebrando el 14 de Feb',
            'descripcion' => 'Aquí con mi amor ',
            'imagen' => '00c03123-fac3-49a4-a78f-7a755e84c86c.webp',
            'user_id' => 2
        ]);

        Post::create([
            'titulo' => 'Aprendiendo a programar',
            'descripcion' => 'Estoy aprendiendo nuevo framework',
            'imagen' => '2059b477-fade-438c-998f-537e88d0c51e.jpg',
            'user_id' => 2
        ]);

        Post::create([
            'titulo' => 'Trabajando duro',
            'descripcion' => 'Próximamente habrá nuevo curso',
            'imagen' => '7c1ecfda-55ea-4382-9b99-af7bfb18f4b2.jpg',
            'user_id' => 2
        ]);

        Post::create([
            'titulo' => 'Alerta Spoilers',
            'descripcion' => 'Lo más trágico de la primer temporada',
            'imagen' => '956af17c-38c7-440f-a70b-ebcd3002b04b.webp',
            'user_id' => 1
        ]);

        Post::create([
            'titulo' => 'Gobernando los 7 Reinos',
            'descripcion' => 'Los Lannister son la familia más poderosa de los siete reinos ¿será por mucho tiempo?',
            'imagen' => '3963b4b7-ce2a-4620-b6dc-12c722372659.webp',
            'user_id' => 3
        ]);

        Post::create([
            'titulo' => 'Nuevo Curso de Big Data',
            'descripcion' => 'No te pierdas el nuevo curso de Big Data próximamente en Udemy',
            'imagen' => '48620712-f89c-426c-9744-69d385634403.jpg',
            'user_id' => 4
        ]);

        Post::create([
            'titulo' => 'Time to Work',
            'descripcion' => 'En reunión con el equipo de Desarrollo',
            'imagen' => 'fb05fb54-eb73-4ccf-a8b8-41740b9f4225.jpg',
            'user_id' => 4
        ]);

        Post::create([
            'titulo' => 'Cazando Bugs',
            'descripcion' => 'Llevo horas sin poder encontrar el bug. Ayuda!!',
            'imagen' => '1cc24630-519d-4082-928e-50500f1abd44.jpg',
            'user_id' => 4
        ]);

        Post::create([
            'titulo' => 'Me lleva!!!',
            'descripcion' => 'Ya es de noche y no puedo solucionar el problema',
            'imagen' => 'd308c3be-3aa6-4f0a-b388-1f21d5c7c903.jpg',
            'user_id' => 4
        ]);

        Post::create([
            'titulo' => 'LOL',
            'descripcion' => 'Sólo era un punto y coma',
            'imagen' => '69f0d513-90a7-42c6-b88a-59a6948f508f.jpg',
            'user_id' => 4
        ]);

        Post::create([
            'titulo' => 'Estrenando monitor',
            'descripcion' => 'Nuevo monitor para codear, unboxing en el enlace',
            'imagen' => '87f5ffdc-b7b9-4ae6-a46a-34e85aab3677.jpg',
            'user_id' => 4
        ]);

        Post::create([
            'titulo' => 'Nuevo Curso Desarrollo de Apps en Android',
            'descripcion' => 'Relanzamos el curso de desarrollo de apps, no te pierdas las promociones',
            'imagen' => '55be727d-4c8c-4b36-9474-6f98b30126bb.jpg',
            'user_id' => 4
        ]);

        Post::create([
            'titulo' => 'React Developer',
            'descripcion' => '¿Quieres aprender a crear interfaces profecionales en React? No te pierdas este curso',
            'imagen' => 'eb292790-7b7f-4b77-9dd0-aa66d2d5cd56.jpg',
            'user_id' => 4
        ]);

        Post::create([
            'titulo' => 'Plan de mentoria',
            'descripcion' => 'Si buscas mejorar o adquirir más conocimientos en el desarrollo de aplicaciones web entra a nuestro plan de mentoria en el que recibirás consejos y ayuda de los expertos en el área.',
            'imagen' => 'a7b5821d-9478-43c3-bec1-ff16f7a8bca3.jpg',
            'user_id' => 4
        ]);

        Post::create([
            'titulo' => 'React Developer',
            'descripcion' => '¿Quieres aprender a crear interfaces profecionales en React? No te pierdas este curso',
            'imagen' => 'eb292790-7b7f-4b77-9dd0-aa66d2d5cd56.jpg',
            'user_id' => 4
        ]);

        Post::create([
            'titulo' => 'Apoyando a nuestros alumnos',
            'descripcion' => 'Te inivitamos al plan de mentoria para perfeccionar tus conocimientos en desarrollo web',
            'imagen' => 'f7a7cd1d-4adf-4e29-b144-54514c45f887.jpg',
            'user_id' => 4
        ]);

        Post::create([
            'titulo' => '¡Nuevo Curso de Node!',
            'descripcion' => 'Ya está disponible el nuevo curso de Node.js',
            'imagen' => '24a5725f-937a-44ad-adb7-f0c63dbb203b.jpg',
            'user_id' => 4
        ]);
    }
}
